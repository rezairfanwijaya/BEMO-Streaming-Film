<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use mysqli;

class gateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $users = $request->validate([
            'nama' => 'required',
            'password' => 'required|min:8',
        ]);
        // apakah ada nama di db sesuai yang di inputkan user?
        $nama = User::where('nama', $users['nama'])->count();
        $data = User::where('nama', $users['nama'])->get();
        
        // jika tidak ada tampilkan pesan kesalahan
        if ($nama === 0){
            return back()->withInput()->with('pesannama', 'Nama pengguna salah');   
        }

        // jika ada maka cek password
        if ($users["password"] != $data[0]["password"]){
            return back()->withInput()->with('pesansandi', 'Kata Sandi Salah');
        }

        // cek level user jika admin arahkan ke halaman admin, jika user arahkan ke halaman user
        if ($data[0]["level"]==='user'){
            // buat session untuk user
            session(['nama' => $data]);
            // arahkan ke halaman user
            return redirect('/home');
        }else{
             // buat session untuk admin
             session(['levelAdmin' => 'admin']);
             // arahkan ke halaman user
             return redirect('/dashboard');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  function untuk proses registrasi
    public function signup(Request $request)
    {
        // syarat untuk setiap field di form signup
        $dataUser = $request->validate([
            'nama' => 'required',
            'password' => 'required|min:8',
            'confirm' => 'required|min:8'
        ]);

        // cek apakah user name telah digunakan atau belum
        // ambil nama yang di input user (nama tidak boleh mengandung karakter aneh)
        $nama = stripslashes(str_replace("'",'',$dataUser["nama"])) ;
        // ambil nama di database berdasarkan nama inputan user dan hitung jumlahnya
        $datas = User::where('nama', $nama)->count();

        // jika 1 berarti sudah digunakan dan tidak boleh lanjut ke tahap berikutnya
        if ($datas === 1 ){
            return back()->withInput()->with('pesan',"Nama sudah digunakan"); 
        }

        // cocokan password
        if ($dataUser["password"] != $dataUser["confirm"]){
            return back()->withInput()->with('pesansandi',"Konfirmasi kata sandi salah");
        }

        // jika sudah cocok semua tinggal masukan data ke database
        $user = new User;
        $user->nama = $dataUser["nama"];
        $user->password = $dataUser["confirm"];
        $user->level = "user";
        $user->save();
        $request->session()->flash('pesan', 'Registrasi berhasil');
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
