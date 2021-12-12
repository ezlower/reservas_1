@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')

<h1> {{ __('Habitaciones') }}</h1>

@stop

@section('content')

<div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
        <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Bookmarks</span>
            <span class="info-box-number">410</span>
            <a href="{{route('rooms.index')}}">101</a>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
