@extends('layout')

@section('content')
	<h1>{{ $project->title }}</h1>

	@auth
		{{-- sólo si el usuario logueado pueden editar proyectos, los invitados no --}}
		<a href="{{ route('projects.edit', $project) }}">Edit</a>
	@endauth

	<p>{{ $project->description }}</p>
	<p>{{ $project->date }}</p>
@endsection