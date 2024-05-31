<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nueva fuente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="fuenteForm">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="fecha_publicacion">Fecha de Publicación:</label>
                        <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion" required>
                    </div>
                    <div class="form-group">
                        <label for="pais">País:</label>
                        <input type="text" class="form-control" id="pais" name="pais" required>
                    </div>
                    <input type="hidden" class="form-control" id="nit_empresa" name="nit_empresa">
                    <input type="hidden" class="form-control" id="id_usuario" name="id_usuario">
                    <input type="hidden" class="form-control" id="fecha_modificacion" name="fecha_modificacion">
                    <input type="hidden" class="form-control" id="fecha_creacion" name="fecha_creacion">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" onclick="guardarFuente()">Guardar</button>
            </div>
        </div>
    </div>
</div>
