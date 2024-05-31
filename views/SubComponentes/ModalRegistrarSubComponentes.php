<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo tipo de SubComponente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="componentForm">
                    <div class="form-group">
                        <label for="id_tipo_analisis">Tipo Análisis</label>
                        <select class="form-control" id="id_tipo_analisis" name="id_tipo_analisis" required>
                            <option value="" disabled selected>Select Tipo Análisis</option>
                            <!-- Add options here -->
                            <option value="1">Análisis 1</option>
                            <option value="2">Análisis 2</option>
                            <option value="3">Análisis 3</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" onclick="guardarTipoAnalisis()">Guardar</button>
            </div>
        </div>
    </div>
</div>