@extends('Layout.ecommerce')
@section('cuerpo')
	<h1>Nuevo registro</h1>
	<form action="{{ route('tarea.guardar') }}" method="GET" 
	name="frm_registro_tarea">
	@csrf
	<label for="name">Nombre</label>
	<input type="text" name="name"/>
	<label for="description">Descripción</label>
	<input type="text" name="description"/>
	<label for="estatus">Estatus</label>
	<input type="text" name="estatus"/>
	<button type="submit">Registrar</button>
	</form>
	<a href="{{ route('home') }}">Regresar</a>
@endsection
@section('header')
	@include('partials.header')
@endsection





