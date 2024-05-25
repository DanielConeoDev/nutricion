<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTAR EMPRESA</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="store.php" id="formulario" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nit">NIT</label>
                            <input type="text" class="form-control" id="nit" name="nit" placeholder="Ingrese el NIT">
                            <div class="error" style="font-size: 12px; color: #dc3545"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre">
                            <div class="error" style="font-size: 12px; color: #dc3545"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el teléfono">
                            <div class="error" style="font-size: 12px; color: #dc3545"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el email">
                            <div class="error" style="font-size: 12px; color: #dc3545"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="prefijo">Prefijo</label>
                            <select class="form-select" id="prefijo" name="prefijo">
                                <option selected disabled>Seleccione un Prefijo</option>
                                <option value="PRIVADO">PRIVADO</option>
                                <option value="PUBLICO">PUBLICO</option>
                            </select>
                            <div class="error" style="font-size: 12px; color: #dc3545"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="estado">Estado</label>
                            <select class="form-select" id="estado" name="estado">
                                <option selected disabled>Seleccione un estado</option>
                                <option value="ACTIVO">ACTIVO</option>
                                <option value="INACTIVO">INACTIVO</option>
                            </select>
                            <div class="error" style="font-size: 12px; color: #dc3545"></div>
                        </div>
                    </div>
                    <button type="reset" class="btn btn-secondary"><i class="fa-solid fa-eraser"></i></button>
                    <button type="submit" class="btn btn-danger">
                        <i class="fa-regular fa-floppy-disk"></i> Registrar
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>