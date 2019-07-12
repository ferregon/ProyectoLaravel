@extends('layout')

@section('contenido')
<h1>Usuarios</h1>
<table class="table">
 	<thead>
 		<tr>
 			<th>Id</th>
 			<th>Nombre</th>
 			<th>Email</th>
 			<th>Role</th>
 			<th>Acciones</th>
 		</tr>
 	</thead>

 	<tbody>
 		@foreach ($users as $user)
			<tr>
 				<td>{{ $user->id }}</td>
 				<td>{{ $user->name }}</td>
 				<td>{{ $user->email }}</td>
 				<td>{{ $user->role->name }}</td>
 				<td>
 					<a class="btn-primary btn-sm" href="{{ route('usuarios.edit', $user->id) }}">
 						Editar
 					</a>
 					<form style=" display: inline;" method="POST" action="{{ route('usuarios.destroy', $user->id) }}">
						{!! csrf_field() !!}
						{!! method_field('DELETE') !!}
 						<button class="btn-danger" type="submit">Eliminar</button>
 					</form>
 				</td>

 			</tr>
 		@endforeach

 	</tbody>
 </table>
@endsection