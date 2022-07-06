@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Crean licenciatura</h1>
@stop

@section('content')
 <div class="card">
        <div class="card-body">
        {!! Form::open(['route' => 'admin.licenciaturas.store']) !!}  
        @include('admin.licenciaturas.partials.form')  
        {!! Form::submit('Crear licenciatura', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
        </div>
 </div>

@stop