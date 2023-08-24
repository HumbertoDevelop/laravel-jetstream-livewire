@extends('adminlte::page')

@section('title', 'Vendors')

@section('content_header')
    <h1>Vendor</h1>
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
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vendors as $vendor)
                    <tr>
                        <td>{{$vendor->id}}</td>
                        <td>{{$vendor->name}}</td>
                        <td>{{$vendor->address}}</td>
                        <td>{{$vendor->email}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <footer class="card-footer">
        {{$vendors->links()}}
    </footer>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop