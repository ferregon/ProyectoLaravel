@extends('layout')

@section ('contenido')
<h1>Mensajes</h1>
<p>Enviado por {{ $message->nombre }} - {{ $message->email }} </p>
<p>{{ $message->mensaje }}</p>

<a class="btn-primary btn-sm" href="{{ route('mensajes.edit', $message->id) }}">
 		Editar
 	</a>
 <form style=" display: inline;" method="POST" action="{{ route('mensajes.destroy', $message->id) }}">
	{!! csrf_field() !!}
	{!! method_field('DELETE') !!}
 	<button class="btn-danger" type="submit">Eliminar</button>
 </form>
@endsection