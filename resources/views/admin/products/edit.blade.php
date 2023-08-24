@extends('adminlte::page')

@section('title', 'Products Edit')

@section('content_header')
    <h1>Products Edit</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="card">
    <div class="card-body">
        <form action="{{route('admin.products.update',$product)}}">
            @csrf
            @method('PUT')
        <div class="row">
            <div class="col-12 col-md-6">
                <label for="product_name">Product name</label>
                <input class="form-control" type="text" name="product_name" value="{{old('product_name', $product->product_name)}}" class="form-control">
                <label for="description_product">Description</label>
                <input class="form-control" type="text" name="description_product" class="form-control" value="{{old('description_name', $product->description_name)}}">
                <label for="sku_product">SKU</label>
                <input class="form-control" type="text" name="sku_product" class="form-control" value="{{old('sku', $product->sku)}}">
            </div>
            <div class="col-12 col-md-6">
                <label for="vendor_product">Vendor</label>
                <input class="form-control" type="text" name="vendor_product" class="form-control" value="{{old('vendor_id', $product->vendor_id)}}">
                <label for="shop_product">Shop</label>
                <input class="form-control" type="text" name="shop_product" class="form-control" value="{{old('shop_id', $product->shop_id)}}">
                <label for="price_shop_product">Price</label>
                <input class="form-control" type="text" name="price_product" class="form-control" value="{{old('productPrice',$productPrice->price)}}">
            </div>
            <div class="col-12">
                <label for="product_group">Product group</label>
                <input class="form-control" type="text" name="product_group" class="form-control" value="{{old('product_group_id', $product->product_group_id)}}">
            </div>
        </div>
            <button type="submit" class="btn btn-primary mt-2">Update</button>
        </form>
       
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop