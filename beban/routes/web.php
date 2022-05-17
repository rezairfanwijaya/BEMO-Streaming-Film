<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\gate;
use App\Http\Controllers\gateController;
use App\Http\Controllers\userController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route landing page
Route::get('/', function () { 
    return view('landing',['title' => 'Bemo']);})->name('landing');

// route login
Route::get('/login', function(){
    return view('auth/login',['title' => 'Login']);})->name('login');

// route signup
Route::get('/signup', function(){
    return view('auth/signup', ['title' => 'Signup']);})->name('signup');



// =============================== GATE =====================================

// route proses signup
Route::post('/signup', 'gateController@signup')->name('gate.signup');

// route proses login
Route::post('/login', 'gateController@login')->name('gate.login');

// =============================== USER =====================================

// route homepage user
Route::get('/home', 'homeController@index')->name('home')->middleware('user_auth');

// route logout user
Route::post('/logout', 'userController@logout')->name('logout')->middleware('user_auth');

// user cari film
Route::post('/home', 'homeController@cari')->name('user.cari')->middleware('user_auth');

// user menonton film
Route::get('/film/watch/{film}', 'homeController@watch')->name('user.watch')->middleware('user_auth');

// user halaman koleksi
Route::get('/koleksi', 'homeController@koleksi')->name('user.koleksi')->middleware('user_auth');

// user proses simpan koleks    i
Route::get('/koleksi/{id}', 'homeController@add_koleksi')->name('user.add.koleksi')->middleware('user_auth');

// user hapus koleksi
Route::delete('/koleksi/hapus/{film}', 'homeController@destroy')->name('user.delete.koleksi')->middleware('user_auth');

// user cari film di koleksi
Route::post('/koleksi/cari', 'homeController@cariKoleksi')->name('user.cari.koleksi')->middleware('user_auth');


// =============================== ADMIN =====================================
// dashboard admin
Route::get('/dashboard', 'adminController@index')->name('admin.dashboard')->middleware('admin_auth');

// logout admin
Route::post('/logout-admin', 'adminController@logout')->name('admin.logout')->middleware('admin_auth');

//admin tampil pengguna
Route::get('/pengguna', 'adminController@pengguna')->name('admin.pengguna')->middleware('admin_auth');

// admin cari pengguna
Route::post('/pengguna', 'adminController@cari')->name('admin.cari.pengguna')->middleware('admin_auth');

//admin delete pengguna
Route::delete('/pengguna/{pengguna}', 'adminController@destroy')->name('admin.destroy')->middleware('admin_auth');

//admin tampil data film
Route::get('/film', 'FilmController@index')->name('film.index')->middleware('admin_auth');

//admin tampil detail film
Route::get('/film/detail/{id}', 'FilmController@show')->name('film.show')->middleware('admin_auth');

//admin tambah film
Route::post('/film/store', 'FilmController@store')->name('film.store')->middleware('admin_auth');

// admin cari film
Route::post('/film', 'FilmController@cari')->name('film.cari')->middleware('admin_auth');

// admin halaman edit film
Route::get('/film/edit/{id}', 'FilmController@edit')->name('film.edit')->middleware('admin_auth');

// admin proses edit film
Route::patch('/film/edit/{film}', 'FilmController@update')->name('film.update')->middleware('admin_auth');

//admin hapus film
Route::delete('/film/{film}', 'FilmController@destroy')->name('film.destroy')->middleware('admin_auth');
