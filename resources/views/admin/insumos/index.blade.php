@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')

 
 <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.insumos.create')}}">Solicitar Insumo</a>
 
<h1>Listado de Insumos</h1>

@stop

@section('content')
 <div class="card">

    <div class="card-body">
        <table width="900px" class="table table-striped" >
            <thead>
                <tr>
                    <th>ID</th>
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
                    
                    
                    <th colspan="2"></th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach($insumos as $insumo)
                <tr>
                    <td>{{$insumo->id}}</td>
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
                  
                    
                    

                    <td width="3px">
                    @can('admin.insumos.edit')
                        <a class="btn btn-primary btn-sm" href="{{route('admin.insumos.edit', $insumo)}}">Editar</a>
                        @endcan
                    </td>
                     <td width="3px">
                     @can('admin.insumos.show')
                        <a class="btn btn-primary btn-sm" href="{{route('admin.insumos.show', $insumo)}}">Ver</a>
                       @endcan
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

@stop