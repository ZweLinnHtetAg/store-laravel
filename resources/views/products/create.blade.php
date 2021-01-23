@extends('template.master')
@section('title','New Product')
@section('heading','New Product')

@section('content')

<div class="row justify-content-center">
<div class="col-6">
    <form action="{{ url('product') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="" class="form-label"> Name</label>
            <input type="text" name="name" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for="" class="form-label"> Category</label>
            <select name="category_id" id="" class="form-control">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="" class="form-label"> Price</label>
            <input type="number" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="" class="form-label"> Qty</label>
            <input type="number" name="qty" class="form-control" >
        </div>
        <div class="form-group">
            <label for="" class="form-label"> Image</label>
            <input type="file" name="img" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary btn-block">Add Product</button>
    </form>
</div>
</div>
@endsection