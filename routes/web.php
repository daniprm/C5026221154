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
    // Route itu ibarat "System" dalam "System.out.print" dan "get", merupakan "out.print"
    return view('welcome');
});

// Route::get('halo', function (){
//     return "<h1>Halo maniezzzz</h1>";
//     // cek melalui http://127.0.0.1:8000/halo
// });
// Route::get('ahay', function(){
//     return "<h2>Ini adalah Route 'ahay'</h2>";
//     // Cara ngeceknya, di browser search http://127.0.0.1:8000/ahay
// });
// Route::get('blogKu', function () {
//     return view('blog'); //Nama file di folder view nya harus sesuai sama parameter view nya
//     // Ini blognya ada di folder views blog.blade.php,
//     // Cara ngeceknya ke browser, http://127.0.0.1:8000/blogKu
// });
Route::get('daniprm', function () {
    return view('ets');
});
Route::get('week1', function () {
    return view('week1');
});
Route::get('week2', function () {
    return view('week2');
});
Route::get('week3', function () {
    return view('week3');
});
Route::get('js1', function () {
    return view('js1');
});
Route::get('js2', function () {
    return view('js2');
});
Route::get('tugas1', function () {
    return view('tugas1');
});
Route::get('tugas2', function () {
    return view('tugas2');
});
Route::get('tugasKastemisasi1', function () {
    return view('tugasKastemisasi1');
});
Route::get('tugasKastemisasi2', function () {
    return view('tugasKastemisasi2');
});
Route::get('contohController', 'App\Http\Controllers\ContohController@index');
Route::get('biodata', 'App\Http\Controllers\ContohController@biodata');

Route::get('showJam/{jam}', 'App\Http\Controllers\ContohController@showTime');

Route::get('/blog', function () {
    return view('home');
});
Route::get('blog/tentang', function () {
    return view('tentang');
});
Route::get('blog/kontak', function () {
    return view('kontak');
});
Route::get('iniForm', function () {
    return view('iniFOrm');
});
Route::get('master', function () {
    return view('master');
});

Route::get('formulir', 'App\Http\Controllers\ContohController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\ContohController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

// Route Nilai Kuliah
Route::get('/nilaikuliah','App\Http\Controllers\latihanEASController@index');
Route::get('/nilaikuliah/tambahNilaiKuliah','App\Http\Controllers\latihanEASController@tambahNilaiKuliah');
Route::post('/nilaikuliah/storeNilai','App\Http\Controllers\latihanEASController@storeNilai');
Route::get('/nilaikuliah/cari','App\Http\Controllers\latihanEASController@cari');

// Route Keranjang Belanja
Route::get('/keranjangbelanja','App\Http\Controllers\keranjangBelanjaController@index');
Route::get('/keranjangbelanja/tambahKeranjangBelanja','App\Http\Controllers\keranjangBelanjaController@tambahKeranjangBelanja');
Route::post('/keranjangbelanja/store','App\Http\Controllers\keranjangBelanjaController@store');
Route::get('/keranjangbelanja/cari','App\Http\Controllers\keranjangBelanjaController@cari');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\keranjangBelanjaController@hapus');

// Route Blueray
Route::get('/blueray','App\Http\Controllers\bluerayController@index');
Route::get('/blueray/tambah','App\Http\Controllers\bluerayController@tambah');
Route::post('/blueray/store','App\Http\Controllers\bluerayController@store');
Route::get('/blueray/edit/{id}','App\Http\Controllers\bluerayController@edit');
Route::post('/blueray/update','App\Http\Controllers\bluerayController@update');
Route::get('/blueray/hapus/{id}','App\Http\Controllers\bluerayController@hapus');
Route::get('/blueray/view/{id}','App\Http\Controllers\bluerayController@view');
Route::get('/blueray/cari','App\Http\Controllers\bluerayController@cari');


//Route Kategori
Route::get('/kategori','App\Http\Controllers\kategoriController@index');
Route::post('/kategori/view','App\Http\Controllers\kategoriController@view');




