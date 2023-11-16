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

