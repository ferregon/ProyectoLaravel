@extends('layout')

@section('contenido')
<h1>Bienvenido {{ $nombre }}</h1>
<ul>
@forelse ($consolas as $consola)
<li> {{ $consola }} </li>
@empty
<p>No HAY CONSOLAS :(</p>
@endforelse
</ul>

@endsection