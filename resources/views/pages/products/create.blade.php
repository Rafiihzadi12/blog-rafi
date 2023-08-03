@extends('layouts.main')

@section('content')


<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Create Data Product</h2>
    </div>
    
    <div class="card-body">
      <form action="{{url('/store-product')}}" method="POST" enctype="multipart/form-data">
        @csrf

       <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>nama:</strong>
                  <input type="text" name="nama" class="form-control" placeholder="" autofocus>
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>price:</strong>
                  <input type="text" name="tahun_terbit" class="form-control" placeholder="">
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="form-group">
                  <strong>description:</strong>
                </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>image:</strong>
                </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>stock:</strong>
                </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="{{url('/index')}}" class="btn btn-warning">Kembali</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection