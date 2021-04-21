{{-- Vista exclusiva de barra de navegación, se hace en otro archivo para mantener más ordenado y organizado porque se va a modificar varias veces --}}
<nav>
	<ul>
		{{-- setLinkActive() es una función helper que está en app/helpers.php --}}
		<li class="{{ setLinkActive('home') }}"><a href="home">Home</a></li>
		<li class="{{ setLinkActive('about') }}"><a href="about">About</a></li>
		<li class="{{ setLinkActive('portfolio') }}"><a href="portfolio">Portfolio</a></li>
		<li class="{{ setLinkActive('contact') }}"><a href="contact">Contact</a></li>
	</ul>
</nav>