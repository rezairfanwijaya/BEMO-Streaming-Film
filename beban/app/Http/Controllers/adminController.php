<?php

namespace App\Http\Controllers;

use App\film;
use App\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    // dashboard admin
    public function index(){

        // list film
        $films = film::select()->orderBy('id', 'DESC')->get();
        
        // list user
        $users = User::select()->where('level', 'user')->orderBy('id', 'DESC')->get();

        // total film
        $filmsTotal = film::all()->count();

        // total pengguna

        $usersTotal = User::all()->where('level', 'user')->count();
        return view('admin.dashboard',[
            'title' => 'Admin | Dashboard',
            'films'=>$films,
            'users'=>$users,
            'TotalFilm'=> $filmsTotal,
            'TotalUser'=>$usersTotal
       
        ]);
    }

    // show pengguna
    public function pengguna(){
        // ambil user
        $users = User::select("*")->where('level', 'user')->orderBy('id', 'DESC')->get();
        // cek apakah ada user atau tidak
        $totalUser = User::select()->where('level', 'user')->count();
        return view('admin.pengguna',[
            'title' => 'Admin | Pengguna',
            'users' => $users,
            'total' => $totalUser
        ]);
    }


    // cari pengguna
    public function cari(Request $request){
        // ambil inputan user
        $key = $request["keyword"];

        // cari ke db
        $user = User::select()->where('nama', 'like', "%$key%")->get();

        // hitung jumlah data
        $userTotal = User::select()->where('nama', 'like', "%$key%")->count();
        
        // kembalikan data 
        return view('admin.pengguna',[
            'title' => 'Admin | Pengguna',
            'users' => $user,
            'total' => $userTotal
        ]);
        
        
        
        
    }

    // hapus pengguna
    public function destroy(Request $request, User $pengguna){
        // pilih data yang akan dihapus
        $pengguna->delete();
        // tampilkan notif berhasil dihapus
        $request->session()->flash('pesan', 'Pengguna berhasil dihapus');
        return redirect('/pengguna');
    }

    // logout admin
    public function logout(){
        // hapus session
        session()->forget('levelAdmin');
        // arahkan ke landing page
        return redirect('/')->with('pesan', 'Logout berhasil');
    }
}
