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
    {!! Form::model($licenciatura,['route'=> ['admin.licenciaturas.update', $licenciatura], 'method'=> 'put']) !!}
            @include('admin.licenciaturas.partials.form')
            {!! Form::submit('Actualizar licenciatura', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
 
    </div>

 </div>

@stop