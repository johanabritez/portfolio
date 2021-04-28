@extends('layout')

@section('content')
	<h1>Create new project</h1>

	{{-- incluye el archivo que muestra los mensajes de errores --}}
	@include('partials.validation-errors')

	<form method="POST" action="{{ route('projects.store') }}">

		{{-- incluye el archivo partial creado para reutilizar el mismo formulario en create y edit --}}
		@include('projects.partialform', ['btnForm' => 'Save'])
		{{-- primer parámetro es la vista que se importa y el segundo es el objeto botón en este caso, para tratar de hacer más dinámico --}}

	</form>
@endsection