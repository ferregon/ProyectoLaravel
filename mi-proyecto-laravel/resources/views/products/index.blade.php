@section('title', 'Product')

@extends('layout')

@section('contenido')
<h1>Productos</h1>
@foreach($consolas as $consola)
<ul>
	<li>{{ $consola }}</li>
</ul>

@endforeach

<form method="get" action="/">
	<p><label for="producto">
		Producto
		<input class="form-control" type="text" name="producto" value="">
	</label></p>

	<p><label for="marca">
		Marca
		<input class="form-control" type="text" name="marca" value="">
	</label></p>
	<p><label for="precio">
		Precio
		<input class="form-control" type="text" name="precio" value="">
	</label></p>

	<p><label for="descripcion">
		Descripcion
		<textarea class="form-control" name="descripcion"></textarea>
	</label></p>
<input class="btn-primary" type="submit" name="Enviar" value="Agregar">

</form>
@endsection