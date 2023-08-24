@extends('adminlte::page')

@section('title', 'Warehouses')

@section('content_header')
    <h1>Warehouses</h1>
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
                    <th>Name</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($warehouses as $warehouse)
                    <tr>
                        <td>{{$warehouse->id}}</td>
                        <td>{{$warehouse->warehouse_name}}</td>
                        <td>{{$warehouse->warehouse_address}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <footer class="card-footer">
        {{$warehouses->links()}}
    </footer>
</div>
@stop
