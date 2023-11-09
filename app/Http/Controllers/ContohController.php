<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    //
    public function index(){
        $a = 8;
        $b = 5;
        $c = $a * $b;
        return "<h1>Hasil perkalian = " . $c . "</h1>";
    }
    public function biodata(){
        $nama = "Ini adalah nama";
        $alamat = "Surabaya";
        $umur = 18;
        return view('biodata', ['nama' => $nama, 'umur' => $umur, 'alamat' => $alamat]); //=> artinya adalah yang kanan  dicopykan ke kiri
    }
}
