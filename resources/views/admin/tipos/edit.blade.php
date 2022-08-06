@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Editar tipo de insumo</h1>
@stop

@section('content')
@if(session('success'))
<div class="alert alert-success">
    <strong>{{session('success')}}</strong>
</div>
@endif
<div class="card">
    <div class="card-body">
        {!! Form::model($tipo,['route'=> ['admin.tipos.update', $tipo], 'method'=> 'put']) !!}
        <div class="form-group">
            {!! Form::label('nombre_insumo', 'Nombre', ) !!}
            {!! Form::text('nombre_insumo',null,
            ['class'=> 'form-control','placeholder'=>'Ingrese el nombre de insumo'])!!}

            @error('nombre_insumo')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        {!! Form::submit('Actualizar Tipo', ['class'=>'btn btn-primary'] ) !!}
        {!! Form::close()!!}
    </div>
</div>
@stop