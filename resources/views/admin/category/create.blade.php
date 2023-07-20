@extends('layouts.master')

@section('title','Category')

@section('content')

<div class="container-fluid px-4">
    <h4 class="mt-4">Add Category</h4>
</div>
<div class="card-body">
    
<form action="{{ url('admin/add-category') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Category Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Slug</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Description</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Image</label>
        <input type="text" name="name" class="form-control">
    </div>

    <h6>SEO Tags</h6>
    <div class="mb-3">
        <label>Meta Title</label>
        <input type="text" name="meta_title" class="form-control">
    </div

</form>

</div>

        </div>
    </div>

    @endsection