@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<a class="btn btn-primary btn-sm float-right" href="{{route('admin.numeros.create')}}">Nuevo numero</a>
<h1>Mostrar numeros</h1>
@stop

@section('content')
@section('content')
<!DOCTYPE html>
<html lang="es">  
<head>    
    <title>Título de la WEB</title>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>  
        
</head>  
<body>
@if(session('success'))
<div class="alert alert-success">
    <strong>{{session('success')}}</strong>

</div>
@endif
<div class="card">
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-dark">
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
                        <a class="btn btn-success btn-sm" href="{{route('admin.numeros.edit', $numero)}}">Editar</a>
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
</div>
</body>
</html>
@stop