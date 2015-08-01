@extends ('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
    {!! Form::open(['route' => 'funcionario.store', 'method' => 'post', 'novalidate']) !!}
           <div class="form-group">
                   {!! Form::label('identificacionf', 'Identificacion_funcionario')!!}
                   {!! Form::text('Identificacion_funcionario, null ['class' => 'form-control', 'required' => 'required']s)  !!}
           </div>
           <div class="form-group">
                   {!! Form::label('tipo_documento', 'Tipo_documento')!!}
                   {!! Form::text('Tipo_documento, null, ['class' => 'form-control', 'required' => 'required']) !!}
           </div>
           <div class="form-group">
                   {!! Form::label('name', 'Nombres')!!}
                   {!! Form::text('Nombres, null, ['class' => 'form-control', 'required' => 'required']) !!}
           </div>
           <div class="form-group">
                   {!! Form::label('apel', 'Apellidos')!!}
                   {!! Form::text('Apellidos, null, ['class' => 'form-control', 'required' => 'required']) !!}
           </div>
           <div class="form-group">
                  {!! Form::label('carg', 'Cargo')!!}
                  {!! Form::text('Cargo, null, ['class' => 'form-control', 'required' => 'required']) !!}
           </div>
           <div class="form-group">
                  {!! Form::label('espe', 'Especialidad')!!}
                  {!! Form::text('Especialidad, null, ['class' => 'form-control', 'required' => 'required']) !!}
           </div>
           <div class="form-group">
                  {!! Form::label('direc', 'Direccion')!!}
                  {!! Form::text('Direccion, null, ['class' => 'form-control', 'required' => 'required']) !!}
          </div>
          <div class="form-group">
                  {!! Form::label('email', 'Email')!!}
                  {!! Form::text('Email, null, ['class' => 'form-control', 'required' => 'required']) !!}
          </div>
          <div class="form-group">
                  {!! Form::label('fecha_nac', 'Fecha_nacimiento')!!}
                  {!! Form::text('Fecha_nacimiento, null, ['class' => 'form-control', 'required' => 'required']) !!}
          </div>
          <div class="form-group">
                  {!! Form::label('tel', 'Telefono')!!}
                  {!! Form::text('Telefono, null, ['class' => 'form-control', 'required' => 'required']) !!}
          </div>
          <div class="form-group">
                  {!! Form::label('gene', 'Genero')!!}
                  {!! Form::text('Genero, null, ['class' => 'form-control', 'required' => 'required']) !!}
          </div>
          <div class="form-group">
                  {!! Form::submit('Enviar', ['class' => 'btn btn-success'] ) !!}            
          </div>
       {!! Form::close() !!}     
         </div>
    </div>
</div>   
@endsection




