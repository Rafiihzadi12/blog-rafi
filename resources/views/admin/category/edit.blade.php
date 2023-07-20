@extends('layouts.master')

@section('title','Category')

@section('content')

<div class="container-fluid px-4">
    <h4 class="mt-4">Edit Category</h4>
</div>
<div class="card-body">

@if ($errors->any())
<div class="alert alert-danger ">
    @foreach ($errors->all() as $error)
        <div>{{$error}}</div>
    @endforeach
</div>
@endif
    
<form action="{{ url('admin/update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Category Name</label>
        <input type="text" name="name" value="{{ $category->name}}" class="form-control">
    </div>
    <div class="mb-3">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control">
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea type="text" name="description" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <h6>SEO Tags</h6>
    <div class="mb-3">
        <label>Meta Title</label>
        <input type="text" name="meta_title" class="form-control">
</div>
<div class="mb-3">
        <label>Meta Description</label>
        <textarea name="meta_description" name="3" class="form-control">{{ $category->meta_keyword }}</textarrea>
</div>
<div class="mb-3">
        <label>Meta Keywords</label>
        <textarea name="meta_keyword" rows="3" class="form-control">{{ $category->meta_keyword }}</textarea>
</div>

<h6>Status Mode</h6>
<div class="row">
    <div class="col-md-3 mb-3">
        <laabel>Navbar Status</label>
        <input type="checkbox" name="navbar_status" {{ $category->navbar_status == '1' ? 'checked':'' }} />
    </div>
    <div class="col-md-3 mb-3">
        <label>Status</label>
        <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked':'' }} />
</div>
<div class="col-md-6">
    <button type="submit" class="btn btn-primary">Update Category</button>
    </div>
</div>

</form>

</div>
</div>
