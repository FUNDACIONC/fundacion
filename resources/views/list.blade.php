@extends ('app')
@section('content')
<div class="container">
		<div class="row">
       <div class="col-md-10 col-md-offset-1">
		{!! Form::open(['route' => 'funcionario/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
	    <div class="form-group">
	    	<label for="exampleInputnombre2">nombre</label>
		    <input type="text" class="form-control" nombre = "name">
     </div>
    <button type="submit" class="btn btn-default">Search</button>
  <a href="{{ route('funcionario.index') }}" class="btn btn-primary">All</a>
  <a href="{{ route('funcionario.create') }}" class="btn btn-primary">Create</a>
  {!! Form::close() !!}
  <br>
           <table class="table table-condensed table-striped table-bordered">
      <thead>
        <tr>
         <th>Identificacion funcionario</th>
         <th>Tipo documento</th>
         <th>Nombres</th>
         <th>Apellidos</th>
         <th>Cargo</th>
         <th>Especialidad</th>
         <th>Direccion</th>
         <th>Email</th>
         <th>Fecha nacimiento</th>
         <th>Telefono</th>
         <th>Genero</th>
         <th>Action</th>
        </tr>
     </thead>
     </body> 
         @foreach($funcionarios as $funcionario)
         <tr>
           <td>{{ $funcionario->identificacion funcionario  }}</td>
           <td>{{ $funcionario->tipo_documento }}</td>
           <td>{{ $funcionario->nombres }}</td>
           <td>{{ $funcionario->apellidos }}</td>
           <td>{{ $funcionario->cargo }}</td>
           <td>{{ $funcionario->especialidad }}</td>
           <td>{{ $funcionario->direccion }}</td>
           <td>{{ $funcionario->email }}</td>
           <td>{{ $funcionario->fecha nacimiento }}</td>
           <td>{{ $funcionario->telefono }}</td>
           <td>{{ $funcionario->genero }}</td>
           <td>
              <a class="btn btn-primary btn-xs" href="{{ route('funcionario.edit',['id' => $funcionario->id] )}}" >Editar</a>
              <a class="btn btn-danger btn-xs" href="{{ route('funcionario/destroy',['id' => funcionario->id] )}}" >Eliminar</a>
           </td>
        </tr>
        @endforeach
     </tbody>
   </table>
    </div>
</div>
@endsection
