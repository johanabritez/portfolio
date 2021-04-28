@if($errors->any()) {{-- si existe algún error --}}
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li> {{-- muestra el o los errores --}}
		@endforeach
	</ul>
@endif