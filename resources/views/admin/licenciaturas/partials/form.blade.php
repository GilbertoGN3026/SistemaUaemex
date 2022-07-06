<div class="form-group">
     {!! Form::label('nombre_licenciatura', 'Licenciatura') !!}
     {!! Form::text('nombre_licenciatura', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Licenciatura']) !!}
     @error('nombre_licenciatura')
         <small class="text-danger">{{$message}}</small>
            
         @enderror
</div>