@extends('layouts.admin')

@section('main-content')
<h3>Data Menu</h3>
 <br>
	<a href="/listmenu" class="btn btn-sm btn-primary pull-right" style="margin-top: -8px">Kembali</a>
<form action="/listmenu/store" method="post">
{{ csrf_field() }}  
  <div class="form-group mt-2">
    <label for="exampleFormControlInput1">Nama</label>
    <input type="text" style="width: 30%" class="form-control" id="nama_makanan" name="nama_makanan">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Harga</label>
    <input type="number" style="width: 30%" class="form-control" id="harga" name="harga">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Gambar</label>
    <input type="file" class="form-control-file" id="gambar" name="gambar">
  </div>
  <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan</button>
</form>

@endsection