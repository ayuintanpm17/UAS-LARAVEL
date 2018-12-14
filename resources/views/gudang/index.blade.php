@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Gudang</p>
        <p class="h5">Gudang / <a href="siswa">home</a></p>
    </div>
    <div>
        <a href="gudang/tambahGudang" class="btn btn-primary"><i class="fas fa-plus"></i></a>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12 table-wrap">
            <table class="table table-striped table-bordered" style="margin-top: 20px;">
                <thead>
                    <tr class="bg-primary" style="color: #fff;">
                        <th scope="col" style="text-align: center;">No</th>
                        <th scope="col" style="text-align: center;">Alamat</th>
                        <th scope="col" style="text-align: center;">Kapasitas(jumlah)</th>
                        <th scope="col" style="text-align: center;">Foto Gudang</th>
                        <th scope="col" style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gudang as $res)
                    <tr>
                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                        <td style="text-align: center;">{{ $res->alamat }}</td>
                        <td style="text-align: center;">{{ $res->kapasitas }}</td>
                        <td style="text-align: center;"><img src="{{ asset('gudangs_img/'.$res->pic) }}" class="img-table"></td>
                        <td class="action-table" style="text-align: center;">
                            <a href="{{ url('gudang/editGudang/'.$res->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="{{ url('gudang/hapusGudang/'.$res->id) }}" onclick="return confirm('Ingin Menghapus Gudang?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
