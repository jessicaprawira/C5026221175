@extends('master3')
@section('judulhalaman','Keranjang Belanja')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Keranjang Belanja</h3>

	<a href="/keranjangbelanja"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="KodeBarang" name="KodeBarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="Jumlah" name="Jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label for="Harga" class="col-sm-2 col-form-label">Harga per Item</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="Harga" name="Harga">
            </div>
        </div>
		{{-- Nama <input type="text" name="nama"> <br/> --}}
		{{-- Jabatan <input type="text" name="jabatan"> <br/> --}}
		{{-- Umur <input type="number" name="umur"> <br/> --}}
		{{-- Alamat <textarea name="alamat"></textarea> <br/> --}}
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

    @endsection
