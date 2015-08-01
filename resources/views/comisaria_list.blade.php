@extends ('app')
@section('content')
<div class="container">
		<div class="row">
		{!! Form::open(['route' => 'comisaria/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
	<div class="form-group">
		<label for="exampleInputnombre3">nombre</label>
		<input type="text" class="form-control" nombre = "nombre">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
  <a href="{{ route('comisaria.index') }}" class="btn btn-primary">All</a>
  <a href="{{ route('comisaria.create') }}" class="btn btn-primary">Create</a>
  {!! Form::close() !!}
  <br>
           <table class="table table-condensed table-striped table-bordered">
      <thead>
        <tr>
         <th>codigo_comisaria</th>
         <th>nombre</th>
         <th>direccion</th>
         <th>telefono</th>
         <th>fk_paciente</th>
         <th>Action</th>
        </tr>
     </thead>
     <tbody> 
         @foreach($comisarias as $comisaria)
         <tr>
           <td>{{ $comisaria->codigo_comisaria  }}</td>
           <td>{{ $comisaria->nombre }}</td>
           <td>{{ $comisaria->direccion }}</td>
           <td>{{ $comisaria->telefono }}</td>
           <td>{{ $comisaria->fk_paciente }}</td>
           <td>
              <a class="btn btn-primary btn-xs" href="{{ route('comisaria.edit',['codigo_comisaria' => $comisaria->codigo_comisaria] )}}" >Edit</a>
              <a class="btn btn-danger btn-xs" href="{{ route('comisaria/destroy',['codigo_comisaria' => $comisaria->codigo_comisaria] )}}" >Delete</a>
           </td>
        </tr>
        @endforeach
     </tbody>
   </table>
    </div>
</div>
@endsection
