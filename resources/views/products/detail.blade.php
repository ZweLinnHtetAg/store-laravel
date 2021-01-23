@extends('template.master')
@section('title','Product Details')
@section('heading','Product Details')

@section('content')


<div class="row justify-content-center">
    <div class="col-4">
        @if($product->img)
        <img src="{{ asset('/upload/products/'.$product->img) }}" alt="" class="img-fluid">
        @else 
        <p class="mt-5">  No Image ... </p>
        @endif
    </div>
    <div class="col-4">
        <table class="table">
            <tr>
                <td>Name</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>Category</td>
                <td>{{ $product->category->name }}</td>
            </tr>
            <tr>
                <td>Price</td>
                <td>$ {{ $product->price }}</td>
            </tr>
            <tr>
                <td>Qty</td>
                <td> {{ $product->qty }}</td>
            </tr>
        </table>
        <a href="{{ route('product.index') }}" class="btn btn-primary float-right">Back</a>
    </div>
</div>


@endsection