{{-- Vista exclusiva de barra de navegación, se hace en otro archivo para mantener más ordenado y organizado porque se va a modificar varias veces --}}
<nav>
	<ul>
		{{-- setLinkActive() es una función helper que está en app/helpers.php --}}
		<li class="{{ setLinkActive('home') }}"><a href="{{ route('home') }}">Home</a></li>
		<li class="{{ setLinkActive('about') }}"><a href="{{ route('about') }}">About</a></li>
		<li class="{{ setLinkActive('projects.*') }}"><a href="{{ route('projects.index') }}">Portfolio</a></li>
		<li class="{{ setLinkActive('contact') }}"><a href="{{ route('contact') }}">Contact</a></li>

		{{-- projects.* es para activar todos los links que empiecen con projects --}}
	</ul>
</nav>