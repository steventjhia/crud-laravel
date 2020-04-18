<?php

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

Route::get('/', function () {
    return view('welcome');
});

route::get('dashboard', function () {
    return view ('mahasiswa.dashboard');
});

route::get('pages', function () {
    return view ('pages');
});

route::resource('mahasiswa','PagesController'); 




//route CRUD 
Route::get('/pegawai','PegawaiController@index'); 

Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::get('pegawai/store','PegawaiController@store'); 

Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::get('/pegawai/update','PegawaiController@update'); 

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');