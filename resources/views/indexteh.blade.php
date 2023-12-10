@extends('master3')
@section('judulhalaman','Data Teh')

@section('konten')
	<h3>Teh</h3>

	<a href="/teh/tambahteh" class="btn btn-primary"> + Tambah Teh</a>

	<br/>
	<br/>

	<table class="table table-striped tabel-hover">
		<tr>
			<th>Kode Teh</th>
			<th>Merk Teh</th>
			<th>Stock Teh</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($teh as $p)
		<tr>
			<td>{{ $p->kodeteh }}</td>
			<td>{{ $p->merkteh }}</td>
			<td>{{ $p->stockteh}}</td>
			<td style="text-align: center">
                @if($p->tersedia == 'Y')
                <input type="checkbox" checked disabled>
                @elseif($p->tersedia == 'N')
                <input type="checkbox" disabled>
                @endif
            </td>
            <td>
				<a href="/teh/viewteh/{{ $p->kodeteh }}" class="btn btn-success">View</a>
                |
				<a href="/teh/editteh/{{ $p->kodeteh }}" class="btn btn-warning">Edit</a>
				|
				<a href="/teh/hapus/{{ $p->kodeteh }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{-- {{ $teh-> links() }} --}}

@endsection
