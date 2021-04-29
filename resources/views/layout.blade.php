<!DOCTYPE html>
<html>
<head>
	<title>Johana Brítez | Portfolio</title>

	{{-- asset te permite crear un enlace absoluto a un archivo estático que esté dentro del directorio público de tu aplicación. Es decir el enlace va a cambiar dependiendo del dominio, IP o virtual host con el cual se ejecute la aplicación --}}

	<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	{{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
	{{-- <link rel="stylesheet" href="{{ mix.postCss('resources/css/app.css', 'public/css') }}"> --}}

	{{-- importamos el javascript (defer hace que ejecute al final de la carga)--}}
	<script src="{{ asset('/js/app.js') }}" defer></script>
	{{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
	{{-- <script src="{{ mix.js('resources/js/app.js', 'public/js') }}" defer></script> --}}




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