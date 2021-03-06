@extends('template.master')
@section('title','New Category')
@section('heading','New Category')

@section('content')

<div class="row justify-content-center">
<div class="col-6">
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="" class="form-label"> Name</label>
            <input type="text" name="name" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for="description" class="form-label"> Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Add New Category</button>
    </form>
</div>
</div>
@endsection