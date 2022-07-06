@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Editar numero</h1>
@stop

@section('content')

    @if(session('success'))
        <div class="alert alert-success">
         <strong>{{session('success')}}</strong>
    </div>
@endif

 <div class="card">
    <div class="card-body">
    {!! Form::model($numero,['route'=> ['admin.numeros.update', $numero], 'method'=> 'put']) !!}
            @include('admin.numeros.partials.form')
            {!! Form::submit('Actualizar numero', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
 
    </div>

 </div>

@stop