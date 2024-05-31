<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo alimento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="alimentosForm">
                    <div class="form-group">
                        <label for="codigo">Código</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="id_fuente">Fuente</label>
                        <select class="form-control" id="id_fuente" name="id_fuente">
                            <option value="1">Fuente 1</option>
                            <option value="2">Fuente 2</option>
                            <option value="3">Fuente 3</option>
                            <!-- Agrega más opciones según sea necesario -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_grupo">Grupo</label>
                        <select class="form-control" id="id_grupo" name="id_grupo">
                            <option value="1">Grupo 1</option>
                            <option value="2">Grupo 2</option>
                            <option value="3">Grupo 3</option>
                            <!-- Agrega más opciones según sea necesario -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_parte_analizada">Parte Analizada</label>
                        <select class="form-control" id="id_parte_analizada" name="id_parte_analizada">
                            <option value="1">Parte Analizada 1</option>
                            <option value="2">Parte Analizada 2</option>
                            <option value="3">Parte Analizada 3</option>
                            <!-- Agrega más opciones según sea necesario -->
                        </select>
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