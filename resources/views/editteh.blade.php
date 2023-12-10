@extends('masterteh')
@section('judulhalaman','Data Teh')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Teh</h3>

	<a href="/teh"> Kembali</a>

	<br/>
	<br/>

	@foreach($teh as $p)
	<form action="/teh/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<input type="hidden" name="kodeteh" value="{{ $p->kodeteh }}"> <br/>

        <div class="form-group row">
            <label for="merkteh" class="col-sm-2 col-form-label">Merk Teh</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="merkteh" name="merkteh" value="{{ $p->merkteh }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockteh" class="col-sm-2 col-form-label">Stock Teh</label>
            <div class="col-sm-10">
            <input type="number" class="form-control" id="stockteh" name="stockteh" value="{{ $p->stockteh }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="tersedia" name="tersedia" value="{{ $p->tersedia }}">
            </div>
        </div>
		{{-- Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/> --}}
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach

@endsection
