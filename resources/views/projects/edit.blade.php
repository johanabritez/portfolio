@extends('layout')

@section('content')
	<h1>Edit project</h1>

	{{-- incluye el archivo que muestra los mensajes de errores --}}
	@include('partials.validation-errors')

	<form action="{{ route('projects.update', $project) }}" method="POST">
		@method('PATCH')

		{{-- incluye el archivo partial creado para reutilizar el mismo formulario en create y edit --}}
		@include('projects.partialform', ['btnForm' => 'Update'])
		{{-- primer parámetro es la vista que se importa y el segundo es el objeto botón en este caso, para tratar de hacer más dinámico --}}
	</form>
@endsection