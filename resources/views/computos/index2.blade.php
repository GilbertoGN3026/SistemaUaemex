@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')

<a class="btn btn-primary btn-sm float-right" href="{{route('computos.create')}}">Solicitar Equipo de Computo</a>

 
<h1>Listado de Solicitantes de Insumos</h1>

@stop
@section('content')
<!DOCTYPE html>
<html lang="es">  
<head>    
    <title>Salas de computo</title>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
   
       
       
</head>  
<body>

<div class="card">

    <div class="card-body">
     <div class="table-responsive">
       <table class="table table-striped">
  <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Solicitante</th>
                    <th>Numero de Cuenta</th>
                    <th>Tipo de servicio</th>
                    <th>Numero de Equipo,Impreiones o Escaneos</th>
                    <th>Licenciatura</th>
                    <th>Usuario</th>
                    <th>Sugerencia</th>
                    <th colspan="2"></th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach($computos as $computo)
                <tr>
                    <td>{{$computo->id}}</td>
                    <td>{{$computo->nombre_completo}}</td>
                    <td>{{$computo->numero_cuenta}}</td>
                    <td>{{$computo->servicio->nombre_servicio}}</td>
                    <td>{{$computo->numero_eie}}</td>
                    <td>{{$computo->licenciatura->nombre_licenciatura}}</td>
                    <td>{{$computo->usuar->tipo_usuario}}</td>
                    <td>{{$computo->sugerencias}}</td>
                  
                    
                    

                    <td width="3px">
                    
                        <a class="btn btn-success btn-sm" href="{{route('computos.edit', $computo)}}">Editar</a>
                        
                    </td>
                     <td width="3px">
                     
                        <a class="btn btn-warning btn-sm" href="{{route('computos.show', $computo)}}">Ver</a>
                       
                    </td>
                     <td width="3px">
                   
                        <form action="{{route('computos.destroy', $computo)}}" method="POST">
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
