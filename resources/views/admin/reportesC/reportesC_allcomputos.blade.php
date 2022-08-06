@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')

 
 <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.reportesC.pdfC_allcomputos')}}">Exportar a PDF</a>
 
<h1>Reporte de Equipos de Computo</h1>

@stop

@section('content')
 <div class="card">

    <div class="card-body">
        
        <table width="900px" class="table table-striped" >

        <div class="row">
            <div class="col-12 col-md-4 text-center">
                <span>Fecha de Consulta: <b> </b> </span>
            <div class="form-group">
                    <strong>{{\Carbon\Carbon::now()->format('d/m/Y')}}</strong>
                </div>
            </div>
        
         
            <div class="col-12 col-md-4 text-center">
                <span>Cantidad de Registros: <b> </b> </span>
            <div class="form-group">
                    <strong>{{$computos->count()}}</strong>
                </div>
            </div>
       

           <thead class="thead-dark">
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
                  
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
