
<div class="d-flex">
<a href="{{ route('users.show', $id) }}" class="btn btn-sm btn-primary">Ver</a>
<a href="{{ route('users.edit', $id) }}" class="btn btn-sm btn-secondary">Editar</a>
<a href="{{ route('users.delete', $id) }}" class="btn btn-sm btn-danger">Eliminar</a>
</div>