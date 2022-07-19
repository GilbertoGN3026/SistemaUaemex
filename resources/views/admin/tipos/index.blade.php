@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Lista de tipos</h1>
@stop

@section('content')
@if(session('success'))
<div class="alert alert-success">
    <strong>{{session('success')}}</strong>

</div>
@endif
<div class="card">
    <div class="card-header">
        <a class="btn btn-secondary " href="{{route('admin.tipos.create')}}">Crear tipo</a>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($tipos as $tipo)
                <tr>
                    <td>{{$tipo->id}}</td>
                    <td>{{$tipo->nombre_insumo}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.tipos.edit', $tipo)}}">Editar</a>
                    </td>
                    <td width="10px">
                    
                        <a class="btn btn-primary btn-sm" href="{{route('admin.tipos.show', $tipo)}}">Ver</a>
                       
                    </td>
                  
                    <td width="10px">
                        <form action="{{route('admin.tipos.destroy', $tipo)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop