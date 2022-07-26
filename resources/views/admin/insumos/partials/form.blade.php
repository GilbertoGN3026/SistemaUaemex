

<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('user_nombre') }}
            {{ Form::text('user_nombre', $insumo->user_nombre, ['class' => 'form-control' . ($errors->has('user_nombre') ? ' is-invalid' : ''), 'placeholder' => 'User Nombre']) }}
            {!! $errors->first('user_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_cuenta') }}
            {{ Form::text('numero_cuenta', $insumo->numero_cuenta, ['class' => 'form-control' . ($errors->has('numero_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Numero Cuenta']) }}
            {!! $errors->first('numero_cuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('aula') }}
            {{ Form::text('aula', $insumo->aula, ['class' => 'form-control' . ($errors->has('aula') ? ' is-invalid' : ''), 'placeholder' => 'Aula']) }}
            {!! $errors->first('aula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $insumo->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('profesor') }}
            {{ Form::text('profesor', $insumo->profesor, ['class' => 'form-control' . ($errors->has('profesor') ? ' is-invalid' : ''), 'placeholder' => 'Profesor']) }}
            {!! $errors->first('profesor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('licenciatura_id') }}
            {{ Form::select('licenciatura_id',$licenciaturas, $insumo->licenciatura_id, ['class' => 'form-control' . ($errors->has('licenciatura_id') ? ' is-invalid' : ''), 'placeholder' => 'Licenciatura']) }}
            {!! $errors->first('licenciatura_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_id') }}
            {{ Form::select('tipo_id',$tipos, $insumo->tipo_id, ['class' => 'form-control' . ($errors->has('tipo_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_id') }}
            {{ Form::select('numero_id',$numeros, $insumo->numero_id, ['class' => 'form-control' . ($errors->has('numero_id') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('numero_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
        {{ Form::label('Fecha y Hora de Solicitud') }}
            {{ Form::datetimeLocal('fecha_horaSol', $insumo->fecha_horaSol, ['class' => 'form-control' . ($errors->has('fecha_horaEnt') ? ' is-invalid' : ''), 'placeholder' => 'Fecha y Hora de Solicitud']) }}
            {!! $errors->first('fecha_horaSol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
        {{ Form::label('Fecha y Hora de Entrega') }}
            {{ Form::datetimeLocal('fecha_horaEnt', $insumo->fecha_horaEnt, ['class' => 'form-control' . ($errors->has('fecha_horaEnt') ? ' is-invalid' : ''), 'placeholder' => 'Fecha y Hora de Entrega']) }}
            {!! $errors->first('fecha_horaEnt', '<div class="invalid-feedback">:message</div>') !!}

        </div>
         <div class="row md-3">
                            <label for="sexo" class="col-md-4 col-form-label text-md-end">{{ __('Conformidad') }}</label>
                            <div class="row md-3">
                                <div class="col"></div>
                                <div class="col col-md-2">
                                    <input class="form-check-input" type="radio" name="conformidad" id="conformidad1" value="Aceptado">
                                    <label class="form-check-label" for="conformidad1">
                                        Conformidad
                                    </label>
                                </div>
                                
                                
                            </div>
                        </div>
       
</div>
