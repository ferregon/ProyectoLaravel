@section('title', 'Contact')

@extends('layout')

@section('contenido')
<h1>Contactos</h1>
	<form method="POST" action="{{ route('contact') }}">
	@csrf
	<p><label for="nombre">
		Nombre
		<input class="form-control" type="text" name="nombre" value="">
	</label></p>

	<p><label for="email">
		Email
		<input class="form-control" type="text" name="email" value="">
	</label></p>
	<p><label for="phone">
		Telefono
		<input class="form-control" type="text" name="phone" value="">
	</label></p>

	<p><label for="mensaje">
		Mensaje
		<textarea class="form-control" name="mensaje"></textarea>
	</label></p>
<input class="btn-primary" type="submit" name="Enviar">

</form>

@endsection