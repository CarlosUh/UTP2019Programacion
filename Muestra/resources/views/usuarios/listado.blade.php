@extends('adminlte::layouts.app')
@section('main-content')
<form method="GET" action="">
	{{ csrf_field() }}	
	<input type="submit" value="filtrar"/>
</form>

<table style="width:100%">
  <tr>
    <th>Nombre</th>
    <th>Correo</th> 
    <th>Token</th>
	<th>Opciones</th>
  </tr>
  @foreach($usuarios as $u)
  <tr>
    <td>{{$u->name}}</td>
    <td>{{$u->email}}</td> 
    <td>{{$u->api_token}}</td>
	<td>
		<form method="POST" action="">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{$u->id}}"/>
			<input type="submit" value="Reestablecer"/>
		</form>
	</td>
  </tr>
  @endforeach
</table>
@endsection


