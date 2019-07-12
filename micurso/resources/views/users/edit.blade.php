@extends('layout')

@section('contenido')

<h1>Editar Usuarios</h1>
@if(session()->has('info'))
	<div class="alert alert-success"> {{ session('info') }} </div>
@endif
<form method="POST" action="{{ route('usuarios.update', $user->id) }}">
	{!! method_field('PUT') !!}
	{!! csrf_field() !!}
	<p><label for="name">
		Usuario
		<input class="form-control" type="text" name="name" value="{{ $user->name }}">
		{!! $errors->first('name', '<span class=error>:message</span>') !!}
	</label></p>

	<p><label for="email">
		Email
		<input class="form-control" type="text" name="email" value="{{ $user->email }}">
		{!! $errors->first('email', '<span class=error>:message</span>') !!}
	</label></p>
	<p><label for="role">
		Role
		<input class="form-control" type="text" name="role" value="{{ $user->role->name }}">
		{!! $errors->first('role', '<span class=error>:message</span>') !!}
	</label></p>
	<input class="btn-primary btn-sm" type="submit" name="Enviar" value="Actualizar">
</form>

@endsection