@extends('adminlte::page')

@section('title', 'Inventories')

@section('content_header')
    <h1>Inventories</h1>
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
                    <th>Product</th>
                    <th>Warehouse</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inventories as $inventory)
                    <tr>
                        <td>{{$inventory->id}}</td>
                        <td>{{$inventory->stock}}</td>
                        <td>{{$inventory->product_id}}</td>
                        <td>{{$inventory->warehouse_id}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <footer class="card-footer">
        {{$inventories->links()}}
    </footer>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop