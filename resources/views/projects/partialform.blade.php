{{-- Formulario reutilizable para la vista create y edit, se agregó en un archivo partial para refactorizar --}}
@csrf
<label>
	Title <br>
	<input type="text" name="title" value="{{ old('title', $project->title) }}">
	{{-- old('title', $project->title) primer parámetro muestra el valor anterior del input y si no había nada entonces muestra $project->title --}}
</label>

<br>

<label>
	Date <br>
	<input type="date" name="project_date" value="{{ old('project_date', $project->project_date) }}">
</label>

<br>

<label>
	URL <br>
	<input type="text" name="url" value="{{ old('url', $project->url) }}">
</label>

<br>

<label>
	Description <br>
	<textarea name="description">{{ old('description', $project->description) }}</textarea>
</label>

<br>

<button>{{ $btnForm }}</button>