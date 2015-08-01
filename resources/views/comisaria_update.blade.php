@extend('app')

@section('content')
 <div class="container">
         <div class="row">
                <div class="col-md-10 col-md-offset-1">
                     {!! Forma::model($comisaria,['route' => 'comisaria.update', 'method' => 'put', 'novalidate']) !!}
                      
                {!! Form::hidden('id', $comisaria->id) !!}

      
                <div class="form-group">
                     {!! Form::label('cod_comisaria', 'codigo_comisaria')!!}
                     {!! Form::text('codigo_comisaria', null ['class' => 'form-control', 'required' => 'required')  !!}
                </div>

                <div class="form-group">
                     {!! Form::label('name', 'nombre')!!}
                     {!! Form::text('nombre, null ['class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                     {!! Form::label('direc', 'direccion')!!}
                     {!! Form::text('direccion, null ['class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                     {!! Form::label('tel', 'Telefono')!!}
                     {!! Form::text('Telefono, null ['class' => 'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                     {!! Form::label('fk_pacient', 'fk_paciente')!!}
                     {!! Form::text('fk_paciente, null ['class' => 'form-control', 'required' => 'required'] ) !!}
                </div>

          <div clas="form-group">
                     {!! Form::submit('Enviar,['class' =>'btn btn-success' ] ) !!}            
          </div>
     {!! Form::close() !!}     
           </div>
    </div>
</div>   
@endsection
