@extends('layout')

{{--
@if(session()->has('info'))
<h3>{{ session('info') }}</h3>
@else
<form method="POST" action="{{ route('producto.store') }}">
	{!! csrf_field() !!}
	<p><label for="categoria">
		Categoria
		<input class="form-control" type="text" name="categoria" value="{{ old('categoria') }}" required="required">
		{!! $errors->first('categoria', '<span class=error>:message</span>') !!}
	</label></p>

	<p><label for="descripcion">
		Descripcion
		<input class="form-control" type="text" name="descripcion" value="{{ old('descripcion') }}">
		{!! $errors->first('descripcion', '<span class=error>:message</span>') !!}
	</label></p>
<input class="btn-primary" type="submit" name="Enviar">

</form>
@endif
@endsection  --}}

@section('contenido')
<h1>Crear Producto</h1>
<form method="POST" action="{{ route('producto.index') }}">
		@csrf

	<label for="categoria">
		Categoria
		<input class="form-control" type="text" name="categoria" placeholder="Categoria"><br>
	</label><br>

	<label for="descripcion">
		Detalles
		<input class="form-control" type="text" name="descripcion" placeholder="Detalles"><br>
	</label><br>

	<input class="btn-primary btn-sm" type="submit" name="" value="Guardar">
</form>


@endsection