@extends('layout')

@section('content')
	<h1>Create new project</h1>

	@if($errors->any()) {{-- si existe algún error --}}
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li> {{-- muestra el o los errores --}}
			@endforeach
		</ul>
	@endif

	<form method="POST" action="{{ route('projects.store') }}">
		@csrf
		<label>
			Title <br>
			<input type="text" name="title" value="{{ old('title') }}">
		</label>

		<br>

		<label>
			Date <br>
			<input type="date" name="project_date" value="{{ old('project_date') }}">
		</label>

		<br>

		<label>
			URL <br>
			<input type="text" name="url" value="{{ old('url') }}">
		</label>

		<br>

		<label>
			Description <br>
			<input type="text" name="description" value="{{ old('description') }}">
		</label>

		<br>

		<button>Save</button>

	</form>
@endsection