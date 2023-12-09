<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class bluerayController extends Controller
{
	public function index()
	{
    	// mengambil data dari table blueray
		$blueray = DB::table('blueray')->paginate(10);


    	// mengirim data blueray ke view index
		return view('blueray',['blueray' => $blueray]);

	}

	// method untuk menampilkan view form tambah blueray
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahBlueray');

	}

	// method untuk insert data ke table blueray
	public function store(Request $request)
	{
		// insert data ke table blueray
		DB::table('blueray')->insert([
			'merkblueray' => $request->merkblueray,
			'stockblueray' => $request->stockblueray,
            'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman blueray
		return redirect('/blueray');

	}

	public function view($kodeblueray)
	{
		// mengambil data blueray berdasarkan kodeblueray yang dipilih
		$blueray = DB::table('blueray')->where('kodeblueray',$kodeblueray)->get();
		// passing data blueray yang dkodebluerayapat ke view edit.blade.php
		return view('viewBlueray',['blueray' => $blueray]);

	}

	// method untuk edit data blueray
	public function edit($kodeblueray)
	{
		// mengambil data blueray berdasarkan kodeblueray yang dipilih
		$blueray = DB::table('blueray')->where('kodeblueray',$kodeblueray)->get();
		// passing data blueray yang dkodebluerayapat ke view edit.blade.php
		return view('editBlueray',['blueray' => $blueray]);

	}

	// update data blueray
	public function update(Request $request)
	{
		// update data blueray
		DB::table('blueray')->where('kodeblueray',$request->kodeblueray)->update([
			'merkblueray' => $request->merkblueray,
			'stockblueray' => $request->stockblueray,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman blueray
		return redirect('/blueray');
	}

	// method untuk hapus data blueray
	public function hapus($kodeblueray)
	{
		// menghapus data blueray berdasarkan kodeblueray yang dipilih
		DB::table('blueray')->where('kodeblueray',$kodeblueray)->delete();

		// alihkan halaman ke halaman blueray
		return redirect('/blueray');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table blueray sesuai pencarian data
		$merkblueray = DB::table('blueray')
		->where('merkblueray','like',"%".$cari."%")
		->paginate(10);

    		// mengirim data blueray ke view index
		return view('blueray',['blueray' => $merkblueray, 'cari'=>$cari]);

	}
}
