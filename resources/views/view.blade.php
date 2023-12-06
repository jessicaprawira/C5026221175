@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>View Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/view" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"><br/>
        <div class="row">
            <div class="container p-3 my-3 border col-sm-6">
            </div>
        <div class="col-sm-6">
        <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label mr-2">Nama</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" name="nama" value="{{ $p->pegawai_nama}}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-3 col-form-label mr-2">Jabatan</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" name="jabatan" value="{{ $p->pegawai_jabatan}}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="Umur" class="col-sm-3 col-form-label mr-2">Umur</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" name="umur" value="{{ $p->pegawai_umur}}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-3 col-form-label mr-2">Alamat</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" name="alamat" value="{{ $p->pegawai_alamat}}" readonly>
            </div>
        </div>

		{{-- Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/> --}}
        <a href="/pegawai" input type="submit" class="btn btn-primary">OK</a>
        </div>
        </div>
	</form>
	@endforeach

@endsection
