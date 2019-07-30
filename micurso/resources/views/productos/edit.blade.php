@extends('layout')

@section('contenido')
<h1>Editar Productos</h1>
<form method="POST" action="{{ route('producto.update', $producto->id) }}">
	{!! method_field('PUT') !!}
	{!! csrf_field() !!}
	<label for="categoria">
		Categoria
		<input class="form-control" type="text" name="categoria" placeholder="Categoria" value="{{ $producto->categoria }}" ><br>
	</label><br>

	<label for="descripcion">
		Detalles
		<input class="form-control" type="text" name="descripcion" placeholder="Detalles" value="{{ $producto->descripcion }}"><br>
	</label><br>

	<input class="btn-primary btn-sm" type="submit" name="" value="Guardar">
</form>


@endsection