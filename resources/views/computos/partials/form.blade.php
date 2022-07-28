

        <div class="float-left">
                            <span class="card-title">Show Insumo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('computos.index') }}"> Back</a>
                        </div>

         <div class="form-group">
            {{ Form::label('nombre_completo') }}
            {{ Form::text('nombre_completo', $computo->nombre_completo, ['class' => 'form-control' . ($errors->has('nombre_completo') ? ' is-invalid' : ''), 'placeholder' => 'User Nombre']) }}
            {!! $errors->first('nombre_completo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_cuenta') }}
            {{ Form::text('numero_cuenta', $computo->numero_cuenta, ['class' => 'form-control' . ($errors->has('numero_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Numero Cuenta']) }}
            {!! $errors->first('numero_cuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('servicio_id') }}
            {{ Form::select('servicio_id',$servicios, $computo->servicio_id, ['class' => 'form-control' . ($errors->has('servicio_id') ? ' is-invalid' : ''), 'placeholder' => 'Licenciatura']) }}
            {!! $errors->first('servicio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_eie') }}
            {{ Form::text('numero_eie', $computo->numero_eie, ['class' => 'form-control' . ($errors->has('numero_eie') ? ' is-invalid' : ''), 'placeholder' => 'numero_eie']) }}
            {!! $errors->first('numero_eie', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('licenciatura_id') }}
            {{ Form::select('licenciatura_id',$licenciaturas, $computo->licenciatura_id, ['class' => 'form-control' . ($errors->has('licenciatura_id') ? ' is-invalid' : ''), 'placeholder' => 'Licenciatura']) }}
            {!! $errors->first('licenciatura_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuar_id') }}
            {{ Form::select('usuar_id',$usuarios, $computo->usuar_id, ['class' => 'form-control' . ($errors->has('usuar_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('usuar_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sugerencias') }}
            {{ Form::text('sugerencias', $computo->sugerencias, ['class' => 'form-control' . ($errors->has('sugerencias') ? ' is-invalid' : ''), 'placeholder' => 'User Nombre']) }}
            {!! $errors->first('sugerencias', '<div class="invalid-feedback">:message</div>') !!}
        </div>

   