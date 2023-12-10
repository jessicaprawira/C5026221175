<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TehController extends Controller
{
	public function indexteh()
	{
    	// mengambil data dari table pegawai
		$teh = DB::table('teh')->get();
    	// mengirim data pegawai ke view index
		return view('indexteh',['teh' => $teh]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambahteh()
	{

		// memanggil view tambah
		return view('tambahteh');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('teh')->insert([
			'merkteh' => $request->merkteh,
			'stockteh' => $request->stockteh,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/teh');

	}

	// method untuk edit data pegawai
	public function edit($kodeteh)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$teh = DB::table('teh')->where('kodeteh',$kodeteh)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editteh',['teh' => $teh]);


	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('teh')->where('kodeteh',$request->kodeteh)->update([
			'merkteh' => $request->merkteh,
			'stockteh' => $request->stockteh,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/teh');
	}

	// method untuk hapus data pegawai
	public function hapus($kodeteh)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('teh')->where('kodeteh',$kodeteh)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/teh');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table pegawai sesuai pencarian data
		$teh = DB::table('teh')
		->where('merkteh','like',"%".$cari."%")
		->paginate();

    	// mengirim data pegawai ke view index
		return view('indexteh',['teh' => $teh, 'cari' => $cari]);

	}

    // method untuk edit data pegawai
	public function view($kodeteh)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$teh = DB::table('teh')->where('kodeteh',$kodeteh)->get();
		// passing data pegawai yang didapat ke view view.blade.php
		return view('viewteh',['teh' => $teh]);
	}

}
