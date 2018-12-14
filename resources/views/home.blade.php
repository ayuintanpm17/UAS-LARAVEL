@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="fas fa-tachometer-alt"></i> Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="menu">
                <a href="{{ url('gudang') }}" class="child-menu" style="ali"><i class="fas fa-warehouse"></i> Data Gudang</a>
                <a href="{{ url('barang') }}" class="child-menu" style="ali"><i class="fas fa-shopping-cart"></i> Data Barang</a>
            </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
