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

Route::get('halo', function () {
    // bisa diisi program apa saja
    return "Halo apa kabar";
});

Route::get('halo2', function () {
    return "<h1>Halo apa kabar</h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('hello', function () {
    return view('hello');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('link', function () {
    return view('link');
});

Route::get('responsive', function () {
    return view('responsive');
});

Route::get('responsive2', function () {
    return view('responsive2');
});

Route::get('style', function () {
    return view('style');
});

Route::get('bs4hw', function () {
    return view('bs4hw');
});

Route::get('sbux', function () {
    return view('sbux');
});

Route::get('layout', function () {
    return view('layout');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}','App\Http\Controllers\DosenController@showtime');
Route::get('/blog', function () {
    return view('blog');
});
Route::get('formulir','App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses','App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home');
});

Route::get('/blog/tentang', function () {
    return view('tentang');
});

Route::get('/blog/kontak', function () {
    return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');


Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//Route CRUD keranjangbelanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangBelanjaController@index2');
Route::get('/keranjangbelanja/tambah2','App\Http\Controllers\KeranjangBelanjaController@tambah');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangBelanjaController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangBelanjaController@hapus');

//route CRUD nilaikuliah
Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::get('/nilaikuliah/tambahData','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');

//route CRUD teh
Route::get('/teh','App\Http\Controllers\TehController@indexteh');
Route::get('/teh/tambahteh','App\Http\Controllers\TehController@tambahteh');
Route::post('/teh/store','App\Http\Controllers\TehController@store');
Route::get('/teh/editteh/{kodeteh}','App\Http\Controllers\TehController@edit');
Route::post('/teh/update','App\Http\Controllers\TehController@update');
Route::get('/teh/hapus/{kodeteh}','App\Http\Controllers\TehController@hapus');
Route::get('/teh/viewteh/{kodeteh}','App\Http\Controllers\TehController@view');

//route CRUD chat
Route::get('/chat','App\Http\Controllers\ChatController@index');
