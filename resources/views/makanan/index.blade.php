@extends('layouts.admin')

@section('main-content')
<h1>Data Menu</h1>
<a href="{{ route('listTambah') }}" class="btn btn-sm btn-primary pull-right" style="margin-top: -8px">Tambah Data</a>
<br>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <p style="text-align: center;" class="card-title">Data Menu</p>
                    <div class="d-sm-flex justify-content-center">
                        <form class="form-inline my-2 my-lg-0" action="" method="POST">
                            @csrf
                            <!-- <input class="form-control mr-sm-12" type="text" name="cari" placeholder="Cari Supplier" id="cari" aria-label="cari" value="{{old('cari')}}">-->
                            <!-- <button class="btn btn-outline-success my-12 my-sm-12" type="submit">Cari</button>-->
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table id="recent-purchases-listing" class="table">
                            <thead class="bg-primary text-light">
                                <tr align="left">
                                    <th style="width: 5%">#</th>
                                    <!-- <th scope="col">ID Supplier</th> -->
                                    <th style="width: 30%">Nama</th>
                                    <th style="width: 25%">Harga</th>
                                    <th style="width: 25%">Gambar</th>
									<th scope="col">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($makanan as $data)
                                <tr>
                                    <td>{{$loop->iteration }}</td>
                                    <td>{{$data->nama_makanan}}</td>
                                    <td>Rp. {{$data->harga}}</td>
                                    <td>{{$data->gambar}}</td>
									<td>
									<a href="/listmenu/edit/{{ $data->id }}" class="btn btn-sm btn-primary pull-right">Edit</a></button>
                					<a href="/listmenu/hapus/{{ $data->id }}" class="btn btn-sm btn-danger pull-right">Hapus</a></button>
									</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- <a href="/jenisbarang/create" type="button" class="btn btn-outline-primary">Tambah Jenis Barang</a>-->
                        <hr>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection