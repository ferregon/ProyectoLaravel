@extends('layout')

@section('contenido')
<h1>Login</h1>

<form class="form-inline" method="POST" action="/login">
	{!! csrf_field() !!}

	<input class="form-control" type="email" name="email" placeholder="Email">
	<input class="form-control" type="password" name="password" placeholder="Password">

	<input class="btn-primary btn-sm" type="submit" value="Entrar">

</form>
@endsection