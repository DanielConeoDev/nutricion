<?php
require_once __DIR__ . '/../../controllers/EmpresaController.php';
$controller = new EmpresaController();
$empresa = $controller->index();
?>

<?php
include("../../public/includ/head.php");
include("../../public/includ/nav.php");
include("../../public/includ/aside.php");
?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
          <i class="fa-solid fa-plus"></i> Empresa
        </button>

        <!-- Modal -->
        <?php include('ModalRegistarEmpresa.php') ?>

      </div><!-- /.col -->
      <div class="col-sm-6">

      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-danger card-outline">
          <div class="card-body table-responsive">
            <table id="example" class="table table-striped table-bordered table-hover table-sm " style="width:100%">
              <thead>
                <tr>
                  <th>Nit</th>
                  <th>Nombre</th>
                  <th>Telefono</th>
                  <th>Email</th>
                  <th>Estado</th>
                  <th>Prefijo</th>
                  <th>Fecha creacion</th>
                  <th>Fecha ultima modificacion</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = $empresa->fetch(PDO::FETCH_ASSOC)) : ?>
                  <tr>
                    <td><?php echo htmlspecialchars($row['nit']); ?></td>
                    <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($row['telefono']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['estado']); ?></td>
                    <td><?php echo htmlspecialchars($row['prefijo']); ?></td>
                    <td><?php echo htmlspecialchars($row['fecha_ultima_modificacion']); ?></td>
                    <td><?php echo htmlspecialchars($row['fecha_creacion']); ?></td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a data-toggle="modal" data-target="#EditarEmpresa" class="dropdown-item " href="#"><i class="fa-solid fa-pen-to-square"></i> Editar</a></li>
                          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash-can"></i> Eliminar</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <div class="modal fade" id="EditarEmpresa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
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
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </div><!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<?php
include("../../public/includ/foot.php");
?>