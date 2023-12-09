<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class keranjangBelanjaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table keranjangbelanja
		$keranjangbelanja = DB::table('keranjangbelanja')->get();


    	// mengirim data keranjangbelanja ke view index
		return view('keranjangBelanja',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah keranjangbelanja
	public function tambahKeranjangBelanja()
	{

		// memanggil view tambah
		return view('tambahKeranjangBelanja');

	}

	// method untuk insert data ke table keranjangbelanja
	public function store(Request $request)
	{
		// insert data ke table keranjangbelanja
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');

	}

	public function view($id)
	{
		// mengambil data keranjangbelanja berdasarkan id yang dipilih
		$keranjangbelanja = DB::table('keranjangbelanja')->where('keranjangbelanja_id',$id)->get();
		// passing data keranjangbelanja yang didapat ke view edit.blade.php
		return view('view',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk edit data keranjangbelanja
	public function edit($id)
	{
		// mengambil data keranjangbelanja berdasarkan id yang dipilih
		$keranjangbelanja = DB::table('keranjangbelanja')->where('keranjangbelanja_id',$id)->get();
		// passing data keranjangbelanja yang didapat ke view edit.blade.php
		return view('editKeranjangBelanja',['keranjangbelanja' => $keranjangbelanja]);

	}

	// update data keranjangbelanja
	public function update(Request $request)
	{
		// update data keranjangbelanja
		DB::table('keranjangbelanja')->where('keranjangbelanja_id',$request->id)->update([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga,
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');
	}

	// method untuk hapus data keranjangbelanja
	public function hapus($id)
	{
		// menghapus data keranjangbelanja berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

        $keranjangbelanja = DB::table('keranjangbelanja');
    	// mengambil data dari table keranjangbelanja sesuai pencarian data
		$KodeBarang = $keranjangbelanja->where('KodeBarang','like',"%".$cari."%")->get();

    	// mengirim data pegawai ke view index
		return view('keranjangBelanja',['keranjangbelanja' => $KodeBarang, 'cari'=>$cari]);

	}
}
