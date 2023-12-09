<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class latihanEASController extends Controller
{
	public function index()
	{
    	// mengambil data dari table nilaikuliah
		$nilaikuliah = DB::table('nilaikuliah')->get();


    	// mengirim data nilaikuliah ke view index
		return view('latihanEAS',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk menampilkan view form tambah nilaikuliah
	public function tambahNilaiKuliah()
	{

		// memanggil view tambah
		return view('tambahNilaiKuliah');

	}

	// method untuk insert data ke table nilaikuliah
	public function storeNilai(Request $request)
	{
		// insert data ke table nilaikuliah
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'SKS' => $request->SKS,
            'NilaiAngka' => $request->NilaiAngka
		]);
		// alihkan halaman ke halaman nilaikuliah
		return redirect('/nilaikuliah');

	}

	public function view($id)
	{
		// mengambil data nilaikuliah berdasarkan id yang dipilih
		$nilaikuliah = DB::table('nilaikuliah')->where('nilaikuliah_id',$id)->get();
		// passing data nilaikuliah yang didapat ke view edit.blade.php
		return view('view',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk edit data nilaikuliah
	public function edit($id)
	{
		// mengambil data nilaikuliah berdasarkan id yang dipilih
		$nilaikuliah = DB::table('nilaikuliah')->where('nilaikuliah_id',$id)->get();
		// passing data nilaikuliah yang didapat ke view edit.blade.php
		return view('edit',['nilaikuliah' => $nilaikuliah]);

	}

	// update data nilaikuliah
	public function update(Request $request)
	{
		// update data nilaikuliah
		DB::table('nilaikuliah')->where('nilaikuliah_id',$request->id)->update([
			'nilaikuliah_nama' => $request->nama,
			'nilaikuliah_jabatan' => $request->jabatan,
			'nilaikuliah_umur' => $request->umur,
			'nilaikuliah_alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman nilaikuliah
		return redirect('/nilaikuliah');
	}

	// method untuk hapus data nilaikuliah
	public function hapus($id)
	{
		// menghapus data nilaikuliah berdasarkan id yang dipilih
		DB::table('nilaikuliah')->where('nilaikuliah_id',$id)->delete();

		// alihkan halaman ke halaman nilaikuliah
		return redirect('/nilaikuliah');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

        $nilaikuliah = DB::table('nilaikuliah');
    	// mengambil data dari table nilaikuliah sesuai pencarian data
		$nrp = $nilaikuliah->where('NRP','like',"%".$cari."%")->get();

    	// mengirim data pegawai ke view index
		return view('latihanEAS',['nilaikuliah' => $nrp, 'cari'=>$cari]);

	}
}
