@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Crear numero</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.numeros.store']) !!}
        @include('admin.numeros.partials.form')
        {!! Form::submit('Crear numero', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop
