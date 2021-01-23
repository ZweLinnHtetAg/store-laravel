@extends('template.master')
@section('title','Product Data')
@section('heading','Products')

@section('content')

<a href="{{ url('product/create') }}" class="btn btn-primary float-right mb-5"> New Product</a>


@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table" id="myTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>category</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
       @forelse($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>
                <a href="{{ route('product.show', $product->id) }}" class="btn btn-info">Detail</a> </td>
            <td>
            <td>
                <a href="{{ url('product/'.$product->id.'/edit ')  }}" class="btn btn-success">Edit</a> </td>
            <td>
                <form action="{{ url('/product/'.$product->id) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        Delete
                    </button>
                </form>
            
            </td>
        </tr
       @empty
        <tr>
            <td colspan="5">No Data</td>
        </tr> 
       @endforelse
    </tbody>
</table>


    
@endsection