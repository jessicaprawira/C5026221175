<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangBelanjaController extends Controller
{
	public function index2()
	{
    	// mengambil data dari table keranjang belanja
		// $pegawai = DB::table('pegawai')->get();
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
    	// mengirim data keranjang belanja ke view index2
		return view('index2',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah keranjang belanja
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah2');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'ID' => $request->ID,
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');

	}

	// // method untuk edit data pegawai
	// public function edit($id)
	// {
	// 	// mengambil data pegawai berdasarkan id yang dipilih
	// 	$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
	// 	// passing data pegawai yang didapat ke view edit.blade.php
	// 	return view('edit',['pegawai' => $pegawai]);


	// }

	// // update data pegawai
	// public function update(Request $request)
	// {
	// 	// update data pegawai
	// 	DB::table('pegawai')->where('pegawai_id',$request->id)->update([
	// 		'pegawai_nama' => $request->nama,
	// 		'pegawai_jabatan' => $request->jabatan,
	// 		'pegawai_umur' => $request->umur,
	// 		'pegawai_alamat' => $request->alamat
	// 	]);
	// 	// alihkan halaman ke halaman pegawai
	// 	return redirect('/pegawai');
	// }

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('keranjangbelanja_ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}

//     public function cari(Request $request)
// 	{
// 		// menangkap data pencarian
// 		$cari = $request->cari;

//     	// mengambil data dari table pegawai sesuai pencarian data
// 		$pegawai = DB::table('pegawai')
// 		->where('pegawai_nama','like',"%".$cari."%")
// 		->paginate();

//     	// mengirim data pegawai ke view index
// 		return view('index',['pegawai' => $pegawai, 'cari' => $cari]);

// 	}

//     // method untuk edit data pegawai
// 	public function view($id)
// 	{
// 		// mengambil data pegawai berdasarkan id yang dipilih
// 		$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
// 		// passing data pegawai yang didapat ke view edit.blade.php
// 		return view('view',['pegawai' => $pegawai]);
// 	}

}
