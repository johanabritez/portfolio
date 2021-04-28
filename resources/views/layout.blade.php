<!DOCTYPE html>
<html>
<head>
	<title>Johana Brítez | Portfolio</title>

	<style type="text/css">
		.activeLink a
		{
			color: red;
			text-decoration: none;
		}
	</style>
</head>

<body>
	{{-- incluye el archivo nav.blade.php que está en la carpeta partials para utilizar la barra de navegación que se declaró ahí --}}
	@include('partials.nav')

	{{-- incluye el archivo que muestra los mensajes de sesión --}}
	@include('partials.session-messages-status')

	{{-- Se crea una sección --}}
	@yield('content')

</body>
</html>