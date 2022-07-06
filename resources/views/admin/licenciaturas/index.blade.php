@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Listado de licenciaturas</h1>
@stop

@section('content')

<div class="card">
<div class="card-header">
        <a class="btn btn-secondary " href="{{route('admin.licenciaturas.create')}}">Crear licenciatura</a>
    </div>
    <div class="card-body">
        <div class="card-header">

            <table class="table table-striped">
            <thead>
                <tr>
                   <th>ID</th> 
                   <th>Licenciaturas</th> 
                   <th colspan="2"></th> 
                </tr>
            </thead>
            <tbody>
            @foreach($licenciaturas as $licenciatura)
                <tr>
                    <td>{{$licenciatura->id}}</td>
                    <td>{{$licenciatura->nombre_licenciatura}}</td>   
                <td width="10px">
                    <a class="btn btn-primary btn-sm" href="{{route('admin.licenciaturas.edit',$licenciatura)}}">Editar</a>
                </td>
                <td width="10px">
                    <form action="{{route('admin.licenciaturas.destroy',$licenciatura)}}" method="POST">
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
</div>

@stop