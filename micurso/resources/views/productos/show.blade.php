@extends('layout')

@section('contenido')
<h1>{{ $producto->categoria }}</h1>

<h2>Detalles: </h2> <p> {{ $producto->descripcion }}</p>

@endsection