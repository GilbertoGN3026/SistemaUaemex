@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
        <a class="btn btn-primary btn-sm float-right"  href="{{route('admin.tipos.create')}}">
       <i class="fa fa-arrow-left" aria-hidden="true"></i> Crear tipo
        </a>

<h1>Lista de tipos de insumos</h1>
@stop

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
        <table class="table table-striped" >
        
             <thead class= "thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                    

                </tr>
            </thead>
            <tbody>
                @foreach ($tipos as $tipo)
                <tr>
                    <td>{{$tipo->id}}</td>
                    <td>{{$tipo->nombre_insumo}}</td>

                    <td width="10px">
                        <a class="btn btn-success btn-sm" href="{{route('admin.tipos.edit', $tipo)}}">Editar</a>
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
</div>
</body>
</html>
@stop