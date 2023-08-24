@extends('adminlte::page')

@section('title', 'Shops')

@section('content_header')
    <h1>Shop</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="card">
    <div class="card-body">
        {{-- <a href="{{route('admin.dates.create')}}" class="btn btn-primary">New Product</a> --}}
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Shop name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shops as $shop)
                    <tr>
                        <td>{{$shop->id}}</td>
                        <td>{{$shop->shop_name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <footer class="card-footer">
        {{$shops->links()}}
    </footer>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop