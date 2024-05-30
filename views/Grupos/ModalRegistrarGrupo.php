<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo grupo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="grupoForm">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="fuente">Fuente:</label>
                        <select class="form-control" id="fuente" name="fuente" required>
                            <option value="" selected disabled>Selecciona una fuente</option>
                            <option value="1">Fuente 1</option>
                            <option value="2">Fuente 2</option>
                            <option value="3">Fuente 3</option>
                            <!-- Agrega aquí más opciones según tus fuentes -->
                        </select>
                    </div>
                    <input type="hidden" class="form-control" id="id_usuario" name="id_usuario">
                    <input type="hidden" class="form-control" id="nit_empresa" name="nit_empresa">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" onclick="guardarGrupo()">Guardar</button>
            </div>
        </div>
    </div>
</div>
