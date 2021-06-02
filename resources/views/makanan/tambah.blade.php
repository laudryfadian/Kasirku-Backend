@extends('layouts.admin')

@section('main-content')
<h3>Data Menu</h3>
 
	<a href="/listmenu"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/listmenu/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama_makanan" required="required"> <br/>
		Harga <input type="number" name="harga" required="required"> <br/>
		Gambar <input type="text" name="gambar" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

@endsection