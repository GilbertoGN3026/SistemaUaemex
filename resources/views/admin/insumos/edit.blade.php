@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Editar Registro</h1>
@stop

@section('content')
 @if(session('success'))
        <div class="alert alert-success">
         <strong>{{session('success')}}</strong>
    </div>
@endif

 <div class="card">
    <div class="card-body">
    {!! Form::model($insumo,['route'=> ['admin.insumos.update', $insumo], 'method'=> 'put']) !!}
            @include('admin.insumos.partials.form')
            {!! Form::submit('Actualizar Registro', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
 
    </div>

 </div>

@stop