<div class="modal fade" id="modal-delete-{{$usuario->id_usuario}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('usuarios.destroy', $usuario->id_usuario)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminación de Registros</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span arial-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Deseas eliminar al registro {{$usuario->nombre}}?
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </form>
    </div>
  </div>