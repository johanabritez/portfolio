@extends('layout')

@section('content')
	<h1>{{ $project->title }}</h1>
	<a href="{{ route('projects.edit', $project) }}">Edit</a>
	<p>{{ $project->description }}</p>
	<p>{{ $project->date }}</p>
@endsection