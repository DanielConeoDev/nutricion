<div class="modal fade" id="EdiatrUsuario<?php echo ($row['id']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="update.php" method="post">
                    <input type="text" name="id" value="<?php echo htmlspecialchars($UsuarioEdiatr->id); ?>" required>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre" value="<?php echo htmlspecialchars($UsuarioEdiatr->nombre); ?>" required>
                            <div class="error" style="font-size: 12px; color: #dc3545"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el email" value="<?php echo htmlspecialchars($UsuarioEdiatr->email); ?>" required>
                            <div class="error" style="font-size: 12px; color: #dc3545"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese la contraseña" value="<?php echo htmlspecialchars($UsuarioEdiatr->password); ?>" required>
                            <div class="error" style="font-size: 12px; color: #dc3545"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="rol">Rol</label>
                            <select class="form-select" id="rol" name="rol" required>
                                <option selected disabled>Seleccione un rol</option>
                                <option value="SUPERADMINISTARDOR">SUPER ADMINISTARDOR</option>
                                <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                            </select>
                            <div class="error" style="font-size: 12px; color: #dc3545"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="estado">Estado</label>
                            <select class="form-select" id="estado" name="estado" required>
                                <option selected disabled>Seleccione un estado</option>
                                <option value="ACTIVO">ACTIVO</option>
                                <option value="INACTIVO">INACTIVO</option>
                            </select>
                            <div class="error" style="font-size: 12px; color: #dc3545"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="imagen">Imagen</label>
                            <!--<input type="file" class="form-control" id="imagen" name="imagen">-->
                            <input type="text" class="form-control" id="imagen" name="imagen" placeholder="Url de imagen" value="<?php echo htmlspecialchars($UsuarioEdiatr->imagen); ?>" required>
                            <div class="error" style="font-size: 12px; color: #dc3545"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="empresa">Empresa</label>
                            <select class="form-select" id="empresa" name="empresa" required>
                                <option selected disabled>Seleccione una empresa</option>
                                <?php
                                while ($RowEmpresa = $EmpresaSelect->fetch(PDO::FETCH_ASSOC)) {
                                    $selected = ($RowEmpresa['nit'] == $nit) ? 'selected' : ''; // Determina si la opción debe estar seleccionada
                                    echo '<option value="' . htmlspecialchars($RowEmpresa['nit']) . '" ' . $selected . '>';
                                    echo htmlspecialchars($RowEmpresa['nit']) . ' - ' . htmlspecialchars($RowEmpresa['nombre']);
                                    echo '</option>';
                                }
                                ?>
                            </select>
                            <div class="error" style="font-size: 12px; color: #dc3545"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary"><i class="fa-solid fa-eraser"></i></button>
                        <button type="submit" class="btn btn-danger"><i class="fa-regular fa-floppy-disk"></i> Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>