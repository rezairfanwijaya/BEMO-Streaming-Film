<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\film;
use App\User;
use App\film_user;
use DB;

class homeController extends Controller
{
    // tampil halaman beranda
    public function index(){

        // mengambil data user yang login
        $nama = session()->get('nama');
        foreach ($nama as $n) {
            $inis =  $n['nama'];
        }

        // ambil huruf pertama dari user
        $inisial = \strtoupper(substr($inis, 0, 1));
        

        // mengambil semua film dari db
        $films = film::select()->orderby('id', 'DESC')->get();

        // menghitung jumlah film
        $filmsCount = film::all()->count();

        return view('home', [
            'title'=>'Bemo | Beranda',
            'films' => $films,
            'count' => $filmsCount,
            'inisial' => $inisial
        ]);
    }

    // user cari film
    public function cari(Request $request){
        // ambil inputan user 
        $key = $request['keyword'];

         // mengambil data user yang login
         $nama = session()->get('nama');
         foreach ($nama as $n) {
             $inis =  $n['nama'];
         }
 
         // ambil huruf pertama dari user
         $inisial = \strtoupper(substr($inis, 0, 1));
         
 
         // mengambil semua film dari db berdasarkan keyword yg diinput user
         $films = film::select()->where('judul', 'like', "%$key%")->get();
 
         // menghitung jumlah film
         $filmsCount = $films->count();
        //  $filmsCount = film::select()->where('judul','like', "%$key%")->count();

         return view('home', [
             'title'=>'Bemo | Beranda',
             'films' => $films,
             'count' => $filmsCount,
             'inisial' => $inisial
         ]);
    }


    // user menonton film
    public function watch($film){
          // mengambil data user yang login
          $nama = session()->get('nama');
          foreach ($nama as $n) {
              $inis =  $n['nama'];
          }
  
          // ambil huruf pertama dari user
          $inisial = \strtoupper(substr($inis, 0, 1));

        //   ambil film yg diklik user
        $film = film::select()->where('id', $film)->get();


        // film untuk film populer
        $populer = film::select()->whereNotin('id', $film)->skip(0)->take(4)->get();

        // film untuk rekomendasi
        $rekomendasi = film::select()->whereNotin('id', $film)->skip(4)->take(4)->get();

          
        return view('watch',[
            'title'=>'Bemo | Watch',
            'inisial' => $inisial,
            'film' => $film,
            'populers'=>$populer,
            'rekomendasies'=>$rekomendasi

        ]);

        
    }

    // halaman proses simpan koleksi
    public function add_koleksi(Request $request, $id){

        // ambil id film
        $id_film = $id;

        // ambil id user
        $nama = session()->get('nama');
        foreach ($nama as $item) {
             $id_user = $item['id'];
        }

        // simpan data ke db
        $koleksi = new film_user();
        $koleksi->user_id = $id_user;
        $koleksi->film_id = $id_film;
        $koleksi->save();
        $request->session()->flash('pesan', 'Film berhasil ditambahkan ke koleksi');
        return redirect()->route('user.koleksi');

    }



    // halaman tampil koleksi
    public function koleksi(){
        // ambil id user
        $nama = session()->get('nama');
        foreach ($nama as $item) {
             $id_user = $item['id'];
        }

        // mengambil data user yang login
        $nama = session()->get('nama');
        foreach ($nama as $n) {
            $inis =  $n['nama'];
        }
          
        // ambil huruf pertama dari user
        $inisial = \strtoupper(substr($inis, 0, 1));
         
        // ambil data hasil relasi sesuai id
        $join = film_user::select('films.judul as judul', 'films.durasi as durasi', 'films.cover as cover', 'films.id as id')
        ->join('users', 'user_id', '=', 'users.id')
        ->join('films', 'film_id', '=', 'films.id')
        ->where('users.id', $id_user)
        ->orderBy('film_users.id', 'DESC')
        ->get();

        // hitung jumlah data yang berelasi sesuai id
        $count = $join->count();
        
          

        return view('koleksi',[
            'title'=>'Bemo | Koleksi',
            'koleksi'=>$join,
            'id'=>$id_user,
            'inisial' => $inisial,
            'count'=>$count

        ]);
    }



    // user cari film
    public function cariKoleksi(Request $request){
        // ambil inputan user
        $key = $request['keyword'];
           

         // ambil id user
         $nama = session()->get('nama');
         foreach ($nama as $item) {
              $id_user = $item['id'];
         }
 
         // mengambil data user yang login
         $nama = session()->get('nama');
         foreach ($nama as $n) {
             $inis =  $n['nama'];
         }
           
         // ambil huruf pertama dari user
         $inisial = \strtoupper(substr($inis, 0, 1));
          
         // ambil data hasil relasi sesuai id
         $join = film_user::select('films.judul as judul', 'films.durasi as durasi', 'films.cover as cover', 'films.id as id')
         ->join('users', 'user_id', '=', 'users.id')
         ->join('films', 'film_id', '=', 'films.id')
         ->where('films.judul', 'like', "%$key%")
         ->where('users.id', $id_user)
         ->get();

         
         
         // hitung jumlah data yang berelasi sesuai id
         $count = $join->count();
         return view('koleksi',[
            'title'=>'Bemo | Koleksi',
            'koleksi'=>$join,
            'id'=>$id_user,
            'inisial' => $inisial,
            'count'=>$count

        ]);
         
    
    }



    // hapus koleksi
    public function destroy(Request $request, $film){
          // ambil id user
          $nama = session()->get('nama');
          foreach ($nama as $item) {
               $id_user = $item['id'];
          }

        $del = film_user::select()
        ->where('film_id', $film)
        ->where('user_id', $id_user)
        ->delete();
        
        $request->session()->flash('pesan','Film berhasil dihapus');
        return redirect()->route('user.koleksi');        
    }
}
