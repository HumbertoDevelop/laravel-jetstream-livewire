@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Products</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="card">
    <div class="card-body">
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Products</th>
                    <th>Description</th>
                    <th>Sku</th>
                    <th>Vendor</th>
                    <th>Shop</th>
                    <th>Group</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->description_name}}</td>
                        <td>{{$product->sku}}</td>
                        <td>{{$product->vendor_id}}</td>
                        <td>{{$product->shop_id}}</td>
                        <td>{{$product->product_group_id}}</td>
                        <td><a width="10" href="{{route('admin.products.edit',$product)}}" class="btn btn-secondary">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <footer class="card-footer">
        {{$products->links()}}
    </footer>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop