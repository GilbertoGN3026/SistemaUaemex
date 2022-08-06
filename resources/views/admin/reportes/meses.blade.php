@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')

  
<h1>Reporte por meses</h1>

@stop

@section('content')
<div class="container">
  <div class="card text-white bg-primary mb-3" style="max-width: 80rem">

    <div class="card-body">
        <div class="container">
  <div class="row">
    <div class="col">
       <div class="text-center">
            <a class="btn btn-success btn-sm float-center" href="{{route('admin.reportes.reporte_mes')}}">Enero-Junio</a>
        </div>
    </div>
    <div class="col">
     <div class="text-center">
            <a class="btn btn-success btn-sm float-center" href="{{route('admin.reportes.reporte_mes2')}}">Julio-Diciembre</a>
        </div>
    </div>
   
  </div>
</div>
       
        
    </div>
</div>

</div>




@stop



