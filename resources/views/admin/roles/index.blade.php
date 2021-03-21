@extends('adminlte::page')

@section('title', 'RK management')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{route('admin.roles.create')}}">Crear Rol</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>

            </thead>

            <tbody>
                    @forelse($role as $roles)
                <tr>
                    <td>{{$roles->id}}</td>
                    <td>{{$roles->name}}</td>

                    <td>
                        <a class="btn btn-secondary" href="{{route('admin.role.edit',$roles)}}">Editar</a>
                    </td>

                    <td>
                        <form action="{{route('admin.role.destroy',$roles)}}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @empty
                        <tr>
                            <td colspan="4">Ningun rol registrado</td>
                        </tr>
                @endforelse

            </tbody>


        </table>




    </div>




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