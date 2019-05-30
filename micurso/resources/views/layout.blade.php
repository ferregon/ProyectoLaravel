<!DOCTYPE html>
<html>
<head>
	<title>Mi Curso</title>
	<meta charset="utf-8">
	<style>
		.active{
			text-decoration: none;
			color: green;
		}

		.error {
			color: red;
			font-size: 12px;

		}

	</style>
</head>
<body>

	<header>
		<?php function activeMenu($url){
			return request()->is($url) ? 'active' : '';
		}

		?>
 		<nav>
 			<a class="{{ activeMenu('/') }}" href="{{ route('home') }}">Home</a>
 			<a class="{{ activeMenu('saludo/*') }}"href="{{ route('saludo', 'Javier') }}">Saludo</a>
 			<a class="{{ activeMenu('contactame') }}"href="{{ route('mensajes.create') }}">Contactos</a>

 		</nav>
 	</header>


@yield('contenido')
<footer>Copyright @ {{ date ('Y') }}</footer>

</body>
</html>