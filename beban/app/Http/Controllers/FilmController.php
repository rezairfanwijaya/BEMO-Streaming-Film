<?php

namespace App\Http\Controllers;

use App\film;
use Illuminate\Http\Request;
use Validator;
use File;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  tampilkan semua data film
    public function index()
    {
        // tampilkan seluruh film
        $films = film::orderBy('id', 'DESC')->get();
        // cek apakah ada data film
        $count = film::count();
        return view('admin.film')->with('title', 'Admin | Film')->with('films', $films)->with('count', $count);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  cari data film
    public function cari(Request $request)
    {
        // ambil inputan user
        $key = $request["keyword"];

        // cari film berdasarkan inputan
        $film = film::select()->where('judul','like', "%$key%" )->get();

        // ceka apakah ada data
        $count = film::select()->where('judul','like', "%$key%" )->count();

        // kirim hasil ke user
        return view('admin.film')->with('title', 'Admin | Film')->with('films', $film)->with('count', $count);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // upload film
    public function store(Request $request)
    {
        $validasiFilm = $request->validate([
            'judul'=>'required',
            'durasi'=>'required',
            'sinopsis'=>'required',
            'cover'=>'required|file|image|max:5000',
            'video'=>'required|file',
        ]);

        $film = new film();
        $film->judul = $validasiFilm['judul'];
        $film->durasi = $validasiFilm['durasi'];
        $film->sinopsis = $validasiFilm['sinopsis'];
        // memindahkan cover yang di upload
        if ($request->hasFile('cover')){
            $extFile = $request->cover->getClientOriginalExtension();
            $namaFile = 'cover-'.time().".".$extFile;
            $path = $request->cover->storeAs('assets/cover',$namaFile);
            $film->cover = $path;
        }
        // memindahkan video yang diupload
        if ($request->hasFile('video')){
            $extFile = $request->video->getClientOriginalExtension();
            $namaFile = 'film-'.time().".".$extFile;
            File::delete($film->image);
            $path = $request->video->storeAs('assets/film',$namaFile);
            $film->video = $path;
        }
        $film->save();
        $request->session()->flash('pesan', 'Film berhasil diupload');
        return redirect()->route('film.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = film::findOrFail($id);
        return \view('admin.detailFilm')->with('title', 'Admin | Show')->with('film', $film);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = film::findOrFail($id);
        return view('admin.editFilm')->with('title', 'Admin | Edit')->with('film', $film);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  edit film
    public function update(Request $request, film $film)
    {
        // validasi data 
        $validasiFilm = $request->validate([
            'judul'=>'required',
            'durasi'=>'required',
            'sinopsis'=>'required',
            'cover'=>'file|image|max:10000',
            'video'=>'file',
        ]);

        // masukan hasil validasi ke db
        $film->judul = $validasiFilm['judul'];
        $film->durasi = $validasiFilm['durasi'];
        $film->sinopsis = $validasiFilm['sinopsis'];
        // cek apakah ada cover yang diupload
        if ($request->hasFile('cover')){
            $extFile = $request->cover->getClientOriginalExtension();
            $namaFile = 'cover-'.time().".".$extFile;
            $path = $request->cover->storeAs('assets/cover',$namaFile);
            $film->cover = $path;
        }
        // cek apakah ada video yang diupload
        if ($request->hasFile('video')){
            $extFile = $request->video->getClientOriginalExtension();
            $namaFile = 'film-'.time().".".$extFile;
            File::delete($film->image);
            $path = $request->video->storeAs('assets/film',$namaFile);
            $film->video = $path;
        }
        $film->save();
        $request->session()->flash('pesan', 'Film berhasil diedit');
        return redirect()->route('film.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  hapus film
    public function destroy(Request $request, film $film)
    {
        File::delete($film->image);
        $film->delete();
        $request->session()->flash('pesan','Hapus data berhasil');
        return redirect()->route('film.index');
    }
}
