@extends('layouts.admin')

@section('main-content')
<h3>Data Menu</h3>
 
	<a href="/listmenu"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($makanan as $p)
	<form action="/listmenu/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama <input type="text" required="required" name="nama_makanan" value="{{ $p->nama_makanan }}"> <br/>
		Harga <input type="number" required="required" name="harga" value="{{ $p->harga }}"> <br/>
		Gambar <input type="text" required="required" name="gambar" value="{{ $p->gambar }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection