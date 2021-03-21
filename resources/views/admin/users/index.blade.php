@extends('adminlte::page')

@section('title', 'RK management')

@section('content_header')
<h1>Lista usuarios</h1>
@stop

@section('content')
@livewire('admin.users-index')
@stop
@livewireScripts
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop