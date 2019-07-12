<!DOCTYPE html>
<html>
<head>
	<title>@yield ('title', 'Proyecto')</title>
	<style>
		.active a{
			color: green;
			text-decoration: none;
		}
	</style>
</head>
<body>

	@include('partials.nav')

    @yield('contenido')

	<footer>Copyright @ {{ date ('Y') }}</footer>

</body>
</html>