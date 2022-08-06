@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Sistema de Captura Universitaria</h1>
@stop

@section('content')
<div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles de registro </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.insumos.index') }}"> atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Completo:</strong>
                            {{ $insumo->user_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Número de Cuenta:</strong>
                            {{ $insumo->numero_cuenta }}
                        </div>
                        <div class="form-group">
                            <strong>Aula:</strong>
                            {{ $insumo->aula }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $insumo->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Profesor:</strong>
                            {{ $insumo->profesor }}
                        </div>
                        <div class="form-group">
                            <strong>Licenciatura:</strong>
                            {{ $insumo->licenciatura->nombre_licenciatura }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo De Insumo:</strong>
                            {{ $insumo->tipo->nombre_insumo}}
                        </div>
                        <div class="form-group">
                            <strong>Número De Insumo:</strong>
                            {{ $insumo->numero->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha y Hora de Solicitud:</strong>
                            {{ $insumo->fecha_horaSol }}
                        </div>
                         <div class="form-group">
                            <strong>Fecha y Hora de Entrega:</strong>
                            {{ $insumo->fecha_horaEnt }}
                        </div>
                          <div class="form-group">
                            <strong>Conformidad:</strong>
                            {{ $insumo->conformidad}}
                        </div>

                    </div>
                </div>

@stop