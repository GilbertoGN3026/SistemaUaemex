
<!DOCTYPE html>
<html lang="es">  
<head>    
    <title>Salas de computo</title>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <style>
        .imagen2{
          background: url("{{asset('img/insumos2.jpg')}}");
          width:800px;  
          height:255px;
          background-size:cover;
          no-repeat;
          justify-content:center;
          margin-left:auto;
          margin-right:auto;
        }
        .texto{
            color:black;
            font-size: 18px;
        }
       
       
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>  
       
       
</head>  
<body>

     <div class="imagen2">
  </div>
  <div class="card col-sm-12 p-3 mx-auto" style= "width:800px; background-color:#c7b75d;">
            <div class="mb-12" >


        <div class="card col-sm-12 p-3 mx-auto" style=width:800px;>
        <div class="mb-12">
        <div class="form-group" >
            {{ Form::label('Nombre de Usuario') }}
            {{ Form::text('user_nombre', $insumo->user_nombre, ['class' => 'form-control' . ($errors->has('user_nombre') ? ' is-invalid' : ''), 'placeholder' => 'User Nombre']) }}
            {!! $errors->first('user_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
         </div>
          </div>
            <div class="card col-sm-12 p-3 mx-auto" style=width:800px;>
            <div class="mb-12">
        <div class="form-group">
            {{ Form::label('Numero de Cuenta') }}
            {{ Form::text('numero_cuenta', $insumo->numero_cuenta, ['class' => 'form-control' . ($errors->has('numero_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Numero Cuenta']) }}
            {!! $errors->first('numero_cuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
         </div>
          </div>
           <div class="card col-sm-12 p-3" >
            <div class="mb-12">
        <div class="form-group">
            {{ Form::label('aula') }}
            {{ Form::text('aula', $insumo->aula, ['class' => 'form-control' . ($errors->has('aula') ? ' is-invalid' : ''), 'placeholder' => 'Aula']) }}
            {!! $errors->first('aula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
          </div>
          </div>
            <div class="card col-sm-12 p-3" >
            <div class="mb-12">
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('telefono', $insumo->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
         </div>
          </div>
           <div class="card col-sm-12 p-3" >
            <div class="mb-12">
        <div class="form-group">
            {{ Form::label('Profesor') }}
            {{ Form::text('profesor', $insumo->profesor, ['class' => 'form-control' . ($errors->has('profesor') ? ' is-invalid' : ''), 'placeholder' => 'Profesor']) }}
            {!! $errors->first('profesor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
         </div>
          </div>
          <div class="card col-sm-12 p-3" >
            <div class="mb-12">
        <div class="form-group">
            {{ Form::label('Licenciatura') }}
            {{ Form::select('licenciatura_id',$licenciaturas, $insumo->licenciatura_id, ['class' => 'form-control' . ($errors->has('licenciatura_id') ? ' is-invalid' : ''), 'placeholder' => 'Licenciatura']) }}
            {!! $errors->first('licenciatura_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
         </div>
          </div>
           <div class="card col-sm-12 p-3" >
            <div class="mb-12">
        <div class="form-group">
            {{ Form::label('Tipo de insumo') }}
            {{ Form::select('tipo_id',$tipos, $insumo->tipo_id, ['class' => 'form-control' . ($errors->has('tipo_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
         </div>
          </div>
          <div class="card col-sm-12 p-3" >
            <div class="mb-12">
        <div class="form-group">
            {{ Form::label('Numero De Insumo') }}
            {{ Form::select('numero_id',$numeros, $insumo->numero_id, ['class' => 'form-control' . ($errors->has('numero_id') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('numero_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
          </div>
          </div>
          <div class="card col-sm-12 p-3" >
            <div class="mb-12">
        <div class="form-group">
        {{ Form::label('Fecha y Hora de Solicitud') }}
            {{ Form::datetimeLocal('fecha_horaSol', $insumo->fecha_horaSol, ['class' => 'form-control' . ($errors->has('fecha_horaEnt') ? ' is-invalid' : ''), 'placeholder' => 'Fecha y Hora de Solicitud']) }}
            {!! $errors->first('fecha_horaSol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
          </div>
          <div class="card col-sm-12 p-3" >
            <div class="mb-12">
        <div class="form-group">
        {{ Form::label('Fecha y Hora de Entrega') }}
            {{ Form::datetimeLocal('fecha_horaEnt', $insumo->fecha_horaEnt, ['class' => 'form-control' . ($errors->has('fecha_horaEnt') ? ' is-invalid' : ''), 'placeholder' => 'Fecha y Hora de Entrega']) }}
            {!! $errors->first('fecha_horaEnt', '<div class="invalid-feedback">:message</div>') !!}

        </div>
          </div>
          </div>
          <div class="texto">
           Nota: En caso de perder el insumo se pagar con 20 pesos
          </div>
          
         <div class="row md-3">
                            <label for="sexo" class="col-md-4 col-form-label ">{{ __('') }}</label>
                            <div class="row md-3">
                              
                                <div class="col col-md-2">
                                    <input class="form-check-input" type="radio" name="conformidad" id="conformidad1" value="Aceptado" style= margin-left:100px;>
                                    <label class="form-check-label" for="conformidad1" style=  margin-left:auto;>
                                        Conformidad
                                    </label>
                                </div>
                                
                                
                            </div>
                        </div>
          </div>
        

</body>
</html>