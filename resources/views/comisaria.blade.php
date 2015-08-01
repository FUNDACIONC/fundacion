@extends ('app')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
    {!! Form::open(['route' => 'comisaria.store', 'method' => 'post', 'novalidate']) !!}
           <div class="form-group">
                   {!! Form::label('cdcomisaria', 'codigo_comisaria')!!}
                   {!! Form::text('codigo_comisaria, null ['class' => 'form-control', 'required' => 'required'])  !!}
           </div>
           <div class="form-group">
                   {!! Form::label('tipo', 'Tipo_documento')!!}
                   {!! Form::text('Tipo_documento, null ['class' => 'form-control', 'required' => 'required']) !!}
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
                  {!! Form::label('tel', 'telefono')!!}
                  {!! Form::text('telefono, null ['class' => 'form-control', 'required' => 'required']) !!}
          </div>
          <div class="form-group">
                  {!! Form::label('fk_pacien', 'fk_paciente')!!}
                  {!! Form::text('fk_paciente, null ['class' => 'form-control', 'required' => 'required']) !!}
          </div>
          <div class="form-group">
                  {!! Form::submit('Enviar', ['class' => 'btn btn-success'] ) !!}            
          </div>
      {!! Form::close() !!}     
           </div>
    </div>
</div>   
@endsection