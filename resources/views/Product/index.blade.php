@extends('layouts.main')

@section('content')

    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card-body">
        <div style="margin-bottom: 20px">
            <a href="{{ url('/create-product')}}" class="btn btn-primary btn-flat">
                <i class="fa fa-plus-circle"></i> Tambah Data
            </a>
        </div>
        <div style="overflow: auto">
            <table class="table table-bordered table-condensed">
                <tr>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center;">Judul Buku</th>
                    <th style="text-align:center;">Tahun Terbit</th>
                    <th style="text-align:center;">Penulis</th>
                    <th style="text-align:center;">Penerbit</th>
                    <th style="text-align:center">Kategori</th>
                    <th width="200px" style="text-align: center;">Sinopsis</th>
                    <th style="text-align:center;">Sampul</th>
                    <th width="250px" style="text-align: center;">Action</th>
                </tr>                
            </table>
            
        </div>
    </div>
</div>
@endsection