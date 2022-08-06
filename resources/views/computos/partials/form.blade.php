
                        
                        
        <section class="d-flex justify-content-center">
        <div class="card col-sm-12 p-3" style= background-color:#c7b75d;>
            <div class="mb-12">
          <div class="form-group">
            {{ Form::label('Nombre_completo') }}
            {{ Form::text('nombre_completo', $computo->nombre_completo, ['class' => 'form-control' . ($errors->has('nombre_completo') ? ' is-invalid' : ''), 'placeholder' => 'Introduce tu Nombre', ]) }}
            {!! $errors->first('nombre_completo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
             </div>
              
        </section>
        <section class="d-flex justify-content-center" style= margin-top:10px;>
        <div class="card col-sm-12 p-3" style= background-color:#c7b75d;>
            <div class="mb-12">
        <div class="form-group">
            {{ Form::label('numero_cuenta') }}
            {{ Form::text('numero_cuenta', $computo->numero_cuenta, ['class' => 'form-control' . ($errors->has('numero_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Introduce tu Numero de Cuenta']) }}
            {!! $errors->first('numero_cuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
           </div>
             </div>
              
        </section>
         <section class="d-flex justify-content-center" style= margin-top:10px;>
        <div class="card col-sm-12 p-3" style= background-color:#c7b75d;>
            <div class="mb-12">
        <div class="form-group">
            {{ Form::label('Tipo de servicio') }}
            {{ Form::select('servicio_id',$servicios, $computo->servicio_id, ['class' => 'form-control' . ($errors->has('servicio_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona el Servicio']) }}
            {!! $errors->first('servicio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
              </div>
           </div>
             
              
        </section>
                             
        <section class="d-flex justify-content-center" style= margin-top:10px;>
        <div class="card col-sm-12 p-3" style= background-color:#c7b75d;>
            <div class="mb-12">
        <div class="form-group">
            {{ Form::label('Numero de Equipo, Impresiones y Escaneo') }}
            {{ Form::text('numero_eie', $computo->numero_eie, ['class' => 'form-control' . ($errors->has('numero_eie') ? ' is-invalid' : ''), 'placeholder' => 'Introduce el Numero']) }}
            {!! $errors->first('numero_eie', '<div class="invalid-feedback">:message</div>') !!}
        </div>
         </div>
             </div>
              
        </section>
         <section class="d-flex justify-content-center" style= margin-top:10px;>
        <div class="card col-sm-12 p-3" style= background-color:#c7b75d;>
            <div class="mb-12">
        <div class="form-group">
            {{ Form::label('Licenciatura') }}
            {{ Form::select('licenciatura_id',$licenciaturas, $computo->licenciatura_id, ['class' => 'form-control' . ($errors->has('licenciatura_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona la Licenciatura']) }}
            {!! $errors->first('licenciatura_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
          </div>
             </div>
              
        </section>
         <section class="d-flex justify-content-center" style= margin-top:10px;>
        <div class="card col-sm-12 p-3" style= background-color:#c7b75d;>
            <div class="mb-12">
        <div class="form-group">
            {{ Form::label('Usuario') }}
            {{ Form::select('usuar_id',$usuarios, $computo->usuar_id, ['class' => 'form-control' . ($errors->has('usuar_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona el tipo de usuario']) }}
            {!! $errors->first('usuar_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
         </div>
             </div>
              
        </section>
        <section class="d-flex justify-content-center" style= margin-top:10px;>
        <div class="card col-sm-12 p-3" style= background-color:#c7b75d;>
            <div class="mb-12">
        <div class="form-group">
            {{ Form::label('Sugerencias') }}
            {{ Form::text('sugerencias', $computo->sugerencias, ['class' => 'form-control' . ($errors->has('sugerencias') ? ' is-invalid' : ''), 'placeholder' => 'Introduce tu sugerencia']) }}
            {!! $errors->first('sugerencias', '<div class="invalid-feedback">:message</div>') !!}
        </div>
         </div>
             </div>
              
        </section>
       <h1></h1> 

   