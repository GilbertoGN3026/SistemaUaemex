@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Crear nuevo tipo</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=> 'admin.tipos.store']) !!}
        <div class="form-group">
            {!! Form::label('nombre_insumo', 'Nombre', ) !!}
            {!! Form::text('nombre_insumo',null,
            ['class' => 'form-control','placeholder'=>'Ingrese el nombre de insumo'])!!}

            @error('nombre_insumo')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        {!! Form::submit('Crear Tipo', ['class'=>'btn btn-primary'] ) !!}
        {!! Form::close()!!}
    </div>
</div>
@stop