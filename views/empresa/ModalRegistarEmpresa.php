<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Empresa</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row mb-3">
                        <label for="nit" class="col-sm-2 col-form-label text-end">NIT</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nit" name="nit" placeholder="Ingrese el NIT">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nombre" class="col-sm-2 col-form-label text-end">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="estado" class="col-sm-2 col-form-label text-end">Estado</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="estado" name="estado">
                                <option selected disabled>Seleccione un estado</option>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                                <option value="En proceso">En proceso</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="telefono" class="col-sm-2 col-form-label text-end">Teléfono</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el teléfono">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label text-end">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="prefijo" class="col-sm-2 col-form-label text-end">Prefijo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="prefijo" name="prefijo" placeholder="Ingrese el prefijo">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>