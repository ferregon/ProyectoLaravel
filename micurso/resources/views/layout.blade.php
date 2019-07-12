<!DOCTYPE html>
<html>
<head>
	<title>Mi Curso</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="/css/app.css">
</head>
<body>

	<header>
		<?php function activeMenu($url){
			return request()->is($url) ? 'active' : '';
		}
		?>

		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link active " href="{{ route('home') }}">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('producto') }}">Productos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('mensajes.create') }}">Contactos</a>
			</li>
	 			@if(auth()->check())
	 				<li class="nav-item">
	 					<a class="nav-link"href="{{ route('mensajes.index') }}">Mensajes</a>
	 				</li>
	 				@if(auth()->user()->hasRoles (['admin','rrhh']) )
	 				<li class="nav-item">
	 					<a class="nav-link"href="{{ route('usuarios.index') }}">Usuarios</a>
	 				</li>
	 				@endif
	 			@endif
			<li class="nav-item">
				@if (auth()->guest())
					<a class="nav-link" href="/login">Login</a>
				@else

	 					<ul class="nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name}}</a>
							<div class="dropdown-menu">
								<a class="dropdown-item " href="/logout">Cerrar Sesion</a>
								<a class="dropdown-item " href="/usuarios/{{ auth()->id() }}/edit">Mi perfil</a>
							</div>
						</li>
					</ul>
	 			@endif
			</li>

		</ul>

<div class="container-fluid">
@yield('contenido')
<footer>Copyright @ {{ date ('Y') }}</footer>
</div>
<script src="/js/app.js"></script>
</body>
</html>