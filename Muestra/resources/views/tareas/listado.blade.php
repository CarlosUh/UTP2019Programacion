@extends('adminlte::layouts.app')
@section('main-content')
<form method="GET" action="">
	{{ csrf_field() }}
	<select name="filtro">
		@foreach($usuarios as $u)
		<option value="{{$u->id}}" >{{$u->email}}</option>
		@endforeach	
	</select>
	<input type="submit" value="filtrar"/>
</form>
<a href="{{ route('tarea.formulario') }}">Registrar nueva tarea</a>
<h1> Existen {{ $existencias}}</h1>
<table style="width:100%">
  <tr>
    <th>Nombre</th>
    <th>Descripcion</th> 
    <th>Estatus</th>
	<th>Usuario</th>
	<th>Imagen</th>
  </tr>
  @foreach($tareas as $tarea)
  <tr>
    <td>{{$tarea->name}}</td>
    <td>{{$tarea->description}}</td> 
    <td>{{$tarea->estatus}}</td>
	<td>{{$tarea->usuario}}</td>
	<td><img src="/ver?id={{$tarea->tareaid}}" alt="Sin imagen"/> </td>
  </tr>
  @endforeach
</table>
@endsection


