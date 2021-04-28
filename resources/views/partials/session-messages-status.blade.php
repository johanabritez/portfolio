	{{-- para mostrar mensajes de éxito en guardar, actualizar, etc --}}

	@if(session('status')) {{-- si hay mensajes en la sesión --}}
		{{ session('status') }} {{-- muestra el mensaje --}}
	@endif