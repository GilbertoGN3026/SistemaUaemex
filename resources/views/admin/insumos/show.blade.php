@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Sistema de prestamos</h1>
@stop

@section('content')
<div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Insumo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.insumos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Nombre:</strong>
                            {{ $insumo->user_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Cuenta:</strong>
                            {{ $insumo->numero_cuenta }}
                        </div>
                        <div class="form-group">
                            <strong>Aula:</strong>
                            {{ $insumo->aula }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $insumo->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Profesor:</strong>
                            {{ $insumo->profesor }}
                        </div>
                        <div class="form-group">
                            <strong>Licenciatura Id:</strong>
                            {{ $insumo->licenciatura->nombre_licenciatura }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Id:</strong>
                            {{ $insumo->tipo->nombre_insumo}}
                        </div>
                        <div class="form-group">
                            <strong>Numero Id:</strong>
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
                            <strong>Conformidad</strong>
                            {{ $insumo->conformidad}}
                        </div>

                    </div>
                </div>

@stop