@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Barang</p>
        <p class="h5">Barang / <a href="siswa">home</a></p>
    </div>
    <div>
        <a href="barang/tambahBarang" class="btn btn-primary"><i class="fas fa-plus"></i></a>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12 table-wrap">
            <table class="table table-striped table-bordered" style="margin-top: 20px;">
                <thead>
                    <tr class="bg-primary" style="color: #fff;">
                        <th scope="col" style="text-align: center;">No</th>
                        <th scope="col" style="text-align: center;">Nama</th>
                        <th scope="col" style="text-align: center;">Berat(KG)</th>
                        <th scope="col" style="text-align: center;">Alamat Gudang</th>
                        <th scope="col" style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barang as $res)
                    <tr>
                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                        <td style="text-align: center;">{{ $res->nama }}</td>
                        <td style="text-align: center;">{{ $res->berat }}</td>
                        <td style="text-align: center;">{{ $res->gudang->alamat }}</td>
                        <td class="action-table" style="text-align: center;">
                            <a href="{{ url('barang/editBarang/'.$res->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="{{ url('barang/hapusBarang/'.$res->id) }}" onclick="return confirm('Konfirmasi hapus')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
