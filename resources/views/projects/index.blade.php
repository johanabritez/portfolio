@extends('layout')

@section('content')
	<h1>Projects</h1>
	<a href="{{ route('projects.create') }}">New Project</a>

	<ul>
		@forelse($projects as $project)
			{{-- cada item es un link que lleva al detalle del proyecto --}}
			<li><a href="{{route('projects.show', $project)}}">{{$project->title}}</a></li>
			{{-- se pasa como parámetro el objeto project project ya que Laravel se encarga de buscar por el id del objeto y ahora queremos que busque por url--}}
		@empty
			<li>No projects</li>
		@endforelse
		{{-- accede a los links de paginación de los proyectos --}}
		{{$projects->links()}}
	</ul>
@endsection