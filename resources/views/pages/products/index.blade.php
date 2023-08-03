@extends('layouts.admin')

@section('content')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <section id="content-types">
        <div class="row">
            <div class="col-xl-12 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        
                    <div class="card-body">
                        <div style="margin-bottom: 20px">
                            <a href="{{ url('/create-product')}}" class="btn btn-primary btn-flat">
                                <i class="fa fa-plus-circle"></i> Tambah Data
                            </a>
                        <div class="table-responsive">
                                <table class="tabel table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Nama</th>
                                            <th style="text-align: center;">price</th>
                                            <th style="text-align: center;">description</th>
                                            <th style="text-align: center;">image</th>
                                            <th style="text-align: center;">Stock</th>
                                        </tr>
                                    </thead>
                                    @foreach($product as $data)
                                    <tbody>
                                        <tr>
                                            <td style="text-align: center;">1</td>
                                            <td style="text-align: center;">Lemari</td>
                                            <td style="text-align: center;">Lemari</td>
                                            <td style="text-align: center;">Lemari</td>
                                            <td style="text-align: center;">Lemari</td>
                                            <td style="text-align: center;">Lemari</td>

                                            <form action="{{ route('product.destroy', $data->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <a class="btn btn-info" href="{{ route('product.show',$data->id) }}">Show</a>
                                                <a class="btn btn-primary" href="{{ route('product.edit',$data->id) }}">Edit</a>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    
    @endsection
                                                
