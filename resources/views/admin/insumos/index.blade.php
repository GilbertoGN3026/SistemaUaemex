@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')

 
 <a class="btn btn-primary btn-sm float-right" href="{{route('admin.insumos.create')}}">Solicitar Insumo</a>
 @can('admin.insumos.index')
<h1>Listado de Solicitantes de Insumos</h1>
@endcan
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

@can('admin.insumos.index')
 <div class="card">
    
    <div class="card-body">
            <div class="table-responsive">
        <table class="table" >
            <thead class= "thead-dark">
                <tr>
                    <th>Solicitante</th>
                    <th>Numero de Cuenta</th>
                    <th>Aula</th>
                    <th>Telefono</th>
                    <th>Profesor</th>
                    <th>Licenciatura</th>
                    <th>Tipo</th>
                    <th>Numero</th>
                    <th>Fecha y Hora de Solicitud</th>
                    <th>Fecha y Hora de Entrega</th>
                    <th>Conformidad</th>
                    <th colspan="2"></th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach($insumos as $insumo)
                <tr>
                    <td>{{$insumo->user_nombre}}</td>
                    <td>{{$insumo->numero_cuenta}}</td>
                    <td>{{$insumo->aula}}</td>
                    <td>{{$insumo->telefono}}</td>
                    <td>{{$insumo->profesor}}</td>
                    <td>{{$insumo->licenciatura->nombre_licenciatura}}</td>
                    <td>{{$insumo->tipo->nombre_insumo}}</td>
                    <td>{{$insumo->numero->numero}}</td>
                    <td>{{$insumo->fecha_horaSol}}</td>
                    <td>{{$insumo->fecha_horaEnt}}</td>
                    <td>{{$insumo->conformidad}}</td>
                  
                    
                    

                    <td width="3px">
                    @can('admin.insumos.edit')
                        <a class="btn btn-success btn-sm" href="{{route('admin.insumos.edit', $insumo)}}">Editar</a>
                        @endcan
                    </td>
                     <td width="3px">
                     
                        <a class="btn btn-warning btn-sm" href="{{route('admin.insumos.show', $insumo)}}">Ver</a>
                       
                    </td>
                    
                    
                    <td width="3px">
                    @can('admin.insumos.destroy')
                        <form action="{{route('admin.insumos.destroy', $insumo)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                        @endcan
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
 @endcan

@stop
