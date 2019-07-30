@extends('layout')

@section('contenido')
 	<table class="table">
 		<tr>
 			<th>Categoria</th>
 			<th>Descripcion</th>
 			<th>Acciones</th>
 		</tr>
 	</thead>
 	<tbody>
 		@foreach($productos as $producto)
 			<tr>
 				<td>
 					<a href="{{ route('producto.show', $producto->id) }}">
 					{{ $producto->categoria }}
 					</a>
 				</td>
 				<td>{{ $producto->descripcion }}</td>
 				<td>
 					<a class="btn-primary btn-sm" href="{{ route('producto.edit', $producto->id) }}">
 					Editar
 					</a>
 					<form style=" display: inline;" method="POST" action="{{ route('producto.destroy', $producto->id) }}">
						{!! csrf_field() !!}
						{!! method_field('DELETE') !!}
 						<button class="btn-danger" type="submit">Eliminar</button>
 					</form>
 				</td>
 			</tr>
 			@endforeach
 	</tbody>
 </table>
<form style=" display: inline;" method="GET" action="{{ route('producto.create') }}">
<button class="btn-primary btn-sm" type="submit">Agregar</button>
</form>
@endsection