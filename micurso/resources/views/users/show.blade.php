@extends('layout')

@section('contenido')
<h1> {{ $user->name }}</h1>
<table class="table">
	<tr>
		<th>Nombre:</th>
		<td> {{ $user->name }}</td>
	</tr>
	<tr>
		<th>Email:</th>
		<td> {{ $user->email }}</td>
	</tr>
	<tr>
		<th>Role:</th>
		<td> {{ $user->role->display_name }}</td>
	</tr>
</table>
@can('edit', $user)
	<a class="btn-primary btn-sm" href="{{ route('usuarios.edit', $user->id) }}">Editar</a>
@endcan

@can('destroy', $user)
	<form style=" display: inline;" method="POST" action="{{ route('usuarios.destroy', $user->id) }}">
		{!! csrf_field() !!}
		{!! method_field('DELETE') !!}
 		<button class="btn-danger" type="submit">Eliminar</button>
 	</form>
@endcan
@endsection