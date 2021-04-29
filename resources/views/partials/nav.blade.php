{{-- Vista exclusiva de barra de navegación, se hace en otro archivo para mantener más ordenado y organizado porque se va a modificar varias veces --}}
<nav>
	<ul>
		{{-- setLinkActive() es una función helper que está en app/helpers.php --}}
		<li class="{{ setLinkActive('home') }}"><a href="{{ route('home') }}">Home</a></li>
		<li class="{{ setLinkActive('about') }}"><a href="{{ route('about') }}">About</a></li>
		<li class="{{ setLinkActive('projects.*') }}"><a href="{{ route('projects.index') }}">Portfolio</a></li>
		<li class="{{ setLinkActive('contact') }}"><a href="{{ route('contact') }}">Contact</a></li>

		{{-- si es invitado (no hizo login), se muestra el link Login --}}
		@guest
			<li><a href="{{ route('login') }}">Login</a></li>
		@else {{-- si ya hizo login puede hacer logout --}}
			<li>
				<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout</a>
			</li>
		@endguest

		{{-- projects.* es para activar todos los links que empiecen con projects --}}
	</ul>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	@csrf
</form>