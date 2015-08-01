@extends ('app')
@section('content')
<div class="container">
		<div class="row">
		{!! Form::open(['route' => 'paciente/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
	<div class="form-group">
		<label for="exampleInputnombre4">nombre</label>
		<input type="text" class="form-control" nombre = "nombre">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
  <a href="{{ route('paciente.index') }}" class="btn btn-primary">All</a>
  <a href="{{ route('paciente.create') }}" class="btn btn-primary">Create</a>
  {!! Form::close() !!}
  <br>
           <table class="table table-condensed table-striped table-bordered">
      <thead>
        <tr>
         <th>Identificacion paciente</th>
         <th>Tipo documento</th>
         <th>Nombres</th>
         <th>Apellidos</th>
         <th>Direccion</th>
         <th>Genero</th>
         <th>Email</th>
         <th>Fecha nacimiento</th>
         <th>Telefono</th>
         <th>Eps</th>
         <th>Estado</th>
         <th>Fk sede</th>
         <th>Action</th>
        </tr>
     </thead>
     <tbody> 
       @foreach($pacientes as $paciente)
         <tr>
           <td>{{ $paciente->identificacion_paciente }}</td>
           <td>{{ $paciente->tipo_documento }}</td>
           <td>{{ $paciente->nombres }}</td>
           <td>{{ $paciente->apellidos }}</td>
           <td>{{ $paciente->direccion }}</td>
           <td>{{ $paciente->genero }}</td>
           <td>{{ $paciente->fecha_nacimiento }}</td>
           <td>{{ $paciente->telefono }}</td>
           <td>{{ $paciente->eps }}</td>
           <td>{{ $paciente->estado }}</td>
           <td>{{ $paciente->fk_sede }}</td>
           <td>
              <a class="btn btn-primary btn-xs" href="{{ route('paciente.edit',['id' => $paciente->id] )}}" >Edit</a>
              <a class="btn btn-danger btn-xs" href="{{ route('paciente/destroy',['id' => $paciente->id] )}}" >Eliminar</a>
           </td>
         </tr>
       @endforeach
     </tbody>
   </table>
    </div>
</div>
@endsection
