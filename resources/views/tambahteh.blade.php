@extends('masterteh')
@section('judulhalaman','Data Teh')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Teh</h3>

	<a href="/teh"> Kembali</a>

	<br/>
	<br/>

	<form action="/teh/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merkteh" class="col-sm-2 col-form-label">Merk Teh</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="merkteh" name="merkteh">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockteh" class="col-sm-2 col-form-label">Stock Teh</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="stockteh" name="stockteh">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="tersedia" name="tersedia">
            </div>
        </div>
		{{-- Nama <input type="text" name="nama"> <br/> --}}
		{{-- Jabatan <input type="text" name="jabatan"> <br/> --}}
		{{-- Umur <input type="number" name="umur"> <br/> --}}
		{{-- Alamat <textarea name="alamat"></textarea> <br/> --}}
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

    @endsection
