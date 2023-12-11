<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class kategoriController extends Controller
{
	public function index()
	{
    	// mengambil data dari table kategori
		$kategori = DB::table('kategori')->get();


    	// mengirim data kategori ke view index
		return view('kategori',['kategori' => $kategori]);

	}

	public function view(Request $request)
	{
		// mengambil data kategori berdasarkan id yang dipilih
		$kategori = DB::table('kategori')->where('id',$request->pilihKategori)->get();
		// passing data kategori yang didapat ke view edit.blade.php
		return view('viewKategori',['kategori' => $kategori]);

	}
}
