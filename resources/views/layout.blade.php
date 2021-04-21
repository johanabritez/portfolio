<!DOCTYPE html>
<html>
<head>
	<title>Professional Portfolio</title>

	<style type="text/css">
		.activeLink a
		{
			color: red;
			text-decoration: none;
		}
	</style>
</head>

<body>
	{{-- se importa el archivo nav.blade.php que está en la carpeta partials para utilizar la barra de navegación que se declaró ahí --}}
	@include(partials.nav)

	{{-- Se crea una sección --}}
	@yield('content')

</body>
</html>