@extends('layouts.admin')

@section('main-content')
<h3>Data Menu Makanan</h3>
 
<button type="button" class="btn btn-primary">Tambah Data</button>
	
	<br/>
	<br/>
 
	<table class="table table-striped">
		<tr>
			<th>Nama</th>
			<th>Harga</th>
			<th>Gambar</th>
			<th>Opsi</th>
		</tr>
		@foreach($makanan as $data)
		<tr>
			<td>{{ $data->nama_makanan }}</td>
			<td>Rp. {{ $data->harga }}</td>
			<td>{{ $data->gambar }}</td>
			<td>
            <button type="button" class="btn btn-light">
				<a href="/listmenu/edit/{{ $data->id }}">Edit</a></button>
            <button type="button" class="btn btn-light">
				<a href="/listmenu/hapus/{{ $data->id }}">Hapus</a></button>
			</td>
		</tr>
		@endforeach
	</table>

@endsection