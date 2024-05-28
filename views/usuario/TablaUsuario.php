<table id="example" class="table table-striped table-bordered table-hover table-sm " style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Estado</th>
            <th>Empresa</th>
            <th>Imagen</th>
            <th>Fecha creacion</th>
            <th>Fecha ultima modificacion</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $usuario->fetch(PDO::FETCH_ASSOC)) :
            //$EmpresaEdiatr = $controller->read($row['nit']);
        ?>
            <tr>
                <td><strong><?php echo htmlspecialchars($row['id']); ?></strong></td>
                <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td><?php echo htmlspecialchars($row['rol']); ?></td>
                <td><?php echo htmlspecialchars($row['estado']); ?></td>
                <td>
                    <?php
                    $nit = $row['empresa_id'];
                    $empresaData = $controllerEmpresa->readNit($nit);

                    if (is_array($empresaData)) {
                        echo htmlspecialchars($empresaData['nombre']);
                    } else {
                        echo "No se encontraron empresas.";
                    }
                    ?>
                </td>
                <td>
                    <img src="<?php echo $row['imagen']; ?>" class="img-thumbnail" alt="<?php echo ($row['id']); ?>" width="60">
                </td>
                <td><?php echo htmlspecialchars($row['fecha_ultima_modificacion']); ?></td>
                <td><?php echo htmlspecialchars($row['fecha_creacion']); ?></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="modal" data-target="#EdiatrUsuario<?php echo ($row['id']); ?>" class="dropdown-item"><i class="fa-solid fa-pen-to-square"></i> Editar</a></li>
                            <li><a class="dropdown-item" href="delete.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-trash-can"></i> Eliminar</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <!-- Modal -->
            <?php include('ModalEditarUsuario.php') ?>
        <?php endwhile; ?>
    </tbody>
</table>