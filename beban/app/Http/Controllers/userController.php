<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
    
    }

    // logout user
    public function logout(){
        // hapus session
        session()->forget('nama');
        // arahkan ke landingpage
        return redirect('/')->with('pesan', 'Logout Berhasil');
    }
}
