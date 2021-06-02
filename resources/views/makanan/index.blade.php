@extends('layouts.admin')

@section('main-content')
<h3>Data Menu Makanan</h3>
<br>
<a href="{{ route('listTambah') }}" class="btn btn-sm btn-primary pull-right" style="margin-top: -8px">Tambah Data</a>

<br />
<br />

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
                <a href="/listmenu/edit/{{ $data->id }}" class="btn btn-sm btn-primary pull-right">Edit</a></button>
                <a href="/listmenu/hapus/{{ $data->id }}" class="btn btn-sm btn-danger pull-right">Hapus</a></button>
        </td>
    </tr>
    @endforeach
</table>

@endsection