@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')

 
<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.insumos.pdf_fecha')}}">Exportar a PDF</a>
 
<h1>Reporte de insumos por fecha</h1>

@stop

@section('content')
 <div class="card">

    <div class="card-body">
        
        {!! Form::open(['route' => 'admin.reportes.reportes_res','method' =>'POST']) !!}
        <div class="row">

            <div class="col-12 col-md-3">
                <span>Fecha inicial</span>
            <div class="form-group">
                   <input class="form-control" type="date" 
                   value="{{old('fecha_ini')}}" 
                   name="fecha_ini" id="fecha_ini"></input>
                </div>
            </div>
             <div class="col-12 col-md-3">
                <span>Fecha final</span>
            <div class="form-group">
                   <input class="form-control" type="date" 
                   value="{{old('fecha_fin')}}" 
                   name="fecha_fin" id="fecha_fin"></input>
                </div>
            </div>

            
         
            <div class="col-12 col-md-3 text-center mt-4">
                
            <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Consultar</button>
                </div>
            </div>
       
            {!! Form::close() !!}
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
                    <th>Conformidad</th>
                    
                    
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
                     <td>{{$insumo->conformidad}}</td>
              

                    
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>




@stop

@section('scripts')
{!!Html::script('melody/js/data-table.js') !!}
<script>
    window.onload = function(){
     var fecha = new Date();
     var mes = fecha.getMonth()+1;
     var dia = fecha.getDate();
     var ano = fecha.getFullyear();
    if(dia<10)
      dia='0'+dia;
      if(mes<10)
      mes='0'+mes
      document.getElementById('fecha_fin').value=ano+"-"+mes+"-"+dia;

}
</script>

@endsection