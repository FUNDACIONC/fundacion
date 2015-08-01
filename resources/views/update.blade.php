@extend('app')

@section('content')
 <div class="container">
         <div class="row">
                <div class="col-md-10 col-md-offset-1">
                     {!! Form::model($funcionario,['route' => 'funcionario.update', 'method' => 'put', 'novalidate']) !!}
                      
                     {!! Form::hidden('identificacion_funcionario', $funcionario->identificacion_funcionario) !!}

      
                <div class="form-group">
                     {!! Form::label('id', 'Identificacion_funcionario')!!}
                     {!! Form::text('Identificacion_funcionario, null ['class' => 'form-control', 'required' => 'required')  !!}
                </div>

                <div class="form-group">
                     {!! Form::label('tipo', 'Tipo_documento')!!}
                     {!! Form::text('Tipo_documento, null ['class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                     {!! Form::label('name', 'Nombres')!!}
                     {!! Form::text('Nombres, null ['class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                     {!! Form::label('apel', 'Apellidos')!!}
                     {!! Form::text('Apellidos, null ['class' => 'form-control', 'required' => 'required']) !!}
                </div>

               <div class="form-group">
                     {!! Form::label('carg', 'Cargo')!!}
                     {!! Form::text('Cargo, null ['class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                     {!! Form::label('espe', 'Especialidad')!!}
                     {!! Form::text('Especialidad, null ['class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                     {!! Form::label('direc', 'Direccion')!!}
                     {!! Form::text('Direccion, null ['class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                     {!! Form::label('correo', 'Email')!!}
                     {!! Form::text('Email, null ['class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                     {!! Form::label('fecha_nac', 'Fecha_nacimiento')!!}
                     {!! Form::text('Fecha_nacimiento, null ['class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                     {!! Form::label('tel', 'Telefono')!!}
                     {!! Form::text('Telefono, null ['class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                     {!! Form::label('gene', 'Genero')!!}
                     {!! Form::text('Genero, null ['class' => 'form-control', 'required' => 'required'] ) !!}
                </div>

          <div clas="form-group">
                     {!! Form::submit('Enviar,['class' =>'btn btn-success' ] ) !!}            
          </div>
                     {!! Form::close() !!}     
          </div>
    </div>
</div>   
@endsection
