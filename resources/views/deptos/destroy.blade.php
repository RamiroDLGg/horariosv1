<!-- Formulario para eliminar el registro -->
<form action="{{ route('deptos.destroy', $depto->id) }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
        <img src="{{ asset('img/icono-delete.png') }}" width="50px" alt="Eliminar">
    </button>
</form>
