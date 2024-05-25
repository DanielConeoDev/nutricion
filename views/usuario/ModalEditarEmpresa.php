<div class="modal fade" id="EditarEmpresa<?php echo ($row['nit']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="update.php" method="post">
                    <input type="hidden" name="nit" value="<?php echo htmlspecialchars($EmpresaEdiatr->nit); ?>" required>
                    <div class="row mb-3">
                        <label for="nombre" class="col-sm-2 col-form-label text-end">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre" value="<?php echo htmlspecialchars($EmpresaEdiatr->nombre); ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="telefono" class="col-sm-2 col-form-label text-end">Teléfono</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el teléfono" value="<?php echo htmlspecialchars($EmpresaEdiatr->telefono); ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label text-end">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el email" value="<?php echo htmlspecialchars($EmpresaEdiatr->email); ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="prefijo" class="col-sm-2 col-form-label text-end">Prefijo</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="prefijo" name="prefijo" required>
                                <option disabled <?php echo empty($EmpresaEdiatr->estado) ? 'selected' : ''; ?>>Seleccione un prefijo</option>
                                <option value="PRIVADO" <?php echo ($EmpresaEdiatr->prefijo == 'PRIVADO') ? 'selected' : ''; ?>>PRIVADO</option>
                                <option value="PUBLICO" <?php echo ($EmpresaEdiatr->prefijo == 'PUBLICO') ? 'selected' : ''; ?>>PUBLICO</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="estado" class="col-sm-2 col-form-label text-end">Estado</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="estado" name="estado" required>
                                <option disabled <?php echo empty($EmpresaEdiatr->estado) ? 'selected' : ''; ?>>Seleccione un estado</option>
                                <option value="ACTIVO" <?php echo ($EmpresaEdiatr->estado == 'ACTIVO') ? 'selected' : ''; ?>>ACTIVO</option>
                                <option value="INACTIVO" <?php echo ($EmpresaEdiatr->estado == 'INACTIVO') ? 'selected' : ''; ?>>INACTIVO</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-danger"><i class="fa-regular fa-circle-up"></i> Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>