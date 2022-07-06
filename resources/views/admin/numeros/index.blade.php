@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.numeros.create')}}">Nuevo numero</a>
<h1>Mostrar numeros</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Numero</th>
                <th colspan="2"></th>
            </thead>
            <tbody>
                @foreach($numeros as $numero)
                <tr>
                    <td>{{$numero->id}}</td>
                    <td>{{$numero->numero}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.numeros.edit', $numero)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.numeros.destroy', $numero)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>
</div>
@stop