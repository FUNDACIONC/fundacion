@extend('app')

@section('content')
 <div class="container">
         <div class="row">
                <div class="col-md-10 col-md-offset-1">
                     {!! Forma::model($paciente,['route' => 'paciente.update', 'method' => 'put', 'novalidate']) !!}
                      
                {!! Form::hidden('id', $paciente->) !!}

      
                 <div class="form-group">
                    {!! Form::label('id', 'identificacion_paciente')!!}
                    {!! Form::text('Identificacion paciente, null ['class' => 'form-control', 'required' => 'required')  !!}
                 </div>

                 <div class="form-group">
                    {!! Form::label('tipo', 'tipo_documento')!!}
                    {!! Form::text('Tipo_documento, null ['class' => 'form-control', 'required' => 'required']) !!}
                 </div>

                 <div class="form-group">
                    {!! Form::label('name', 'nombres')!!}
                    {!! Form::text('Nombres, null ['class' => 'form-control', 'required' => 'required']) !!}
                 </div>

                 <div class="form-group">
                    {!! Form::label('apel', 'apellidos')!!}
                    {!! Form::text('Apellidos, null ['class' => 'form-control', 'required' => 'required']) !!}
                 </div>
  
                 <div class="form-group">
                    {!! Form::label('direc', 'direccion')!!}
                    {!! Form::text('Direccion, null ['class' => 'form-control', 'required' => 'required']) !!}
                 </div>

                 <div class="form-group">
                    {!! Form::label('gene', 'genero')!!}
                    {!! Form::text('Genero, null ['class' => 'form-control', 'required' => 'required']) !!}
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
                   {!! Form::label('eps', 'eps')!!}
                   {!! Form::text('Eps', null ['class' => 'form-control', 'required' => 'required']) !!}
                 </div>
 
          <div class="form-group">
                   {!! Form::label('est', 'estado')!!}
                   {!! Form::text('Estado, null ['class' => 'form-control', 'required' => 'required']) !!}
          </div>

          <div class="form-group">
                  {!! Form::label('fk-sede', 'fk_sede')!!}
                  {!! Form::text('Fk_sede, null ['class' => 'form-control', 'required' => 'required']) !!}
          </div>


          <div clas="form-group">
                  {!! Form::submit('Enviar,['class' =>'btn btn-success' ] ) !!}            
          </div>
                  {!! Form::close() !!}     
           </div>
    </div>
</div>   
@endsection


          

