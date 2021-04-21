<?php

// Función setLinkActive que activa el link de la ruta en la que estamos actualmente
function setLinkActive($routeName)
{
	/*request() obtiene una instancia de la clase Request y de allí obtenemos el nombre de
	la ruta en la que estamos con routeIs(). Si la ruta actual en la que estamos es igual a la que pasamos por parámetro entonces activa el link, sino no*/

	return request()->routeIs($routeName) ? 'activeLink' : '';
}