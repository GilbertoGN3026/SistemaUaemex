<div class="form-group">
         {!! Form::label('numero', 'Numero') !!}
         {!! Form::text('numero', null, ['class' => 'form-control', 'placeholder'=>'Ingrese el numero']) !!}
         @error('numero')
         <small class="text-danger">{{$message}}</small>
            
         @enderror

        </div>