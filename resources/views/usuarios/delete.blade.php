<form action="{{ route('usuarios.destroy', $usuario->id) }}" method="post"  style="display:inline-block;" accept-charset="utf-8">

	@method('DELETE')
	@csrf

	<button type="submit" class="btn btn-danger">Eliminar</button>

</form>