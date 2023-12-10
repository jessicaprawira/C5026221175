@extends('masterteh')
@section('judulhalaman','Data Teh')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>View Teh</h3>

	<a href="/teh"> Kembali</a>

	<br/>
	<br/>

	@foreach($teh as $p)
	<form action="/teh/view" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <input type="hidden" name="kodeteh" value="{{ $p->kodeteh }}"><br/>
        <div class="row">
            <div class="container p-3 my-3 border col-sm-6">
            </div>
        <div class="col-sm-6">
            <div class="form-group row">
                <label for="merkteh" class="col-sm-2 col-form-label">Merk Teh</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="merkteh" name="merkteh" value="{{ $p->merkteh }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="stockteh" class="col-sm-2 col-form-label">Stock Teh</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="stockteh" name="stockteh" value="{{ $p->stockteh }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="umur" name="umur" value="{{ $p->tersedia }}" readonly>
                </div>
            </div>
		{{-- Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/> --}}
        <a href="/teh" input type="submit" class="btn btn-primary">OK</a>
        </div>
        </div>
	</form>
	@endforeach

@endsection
