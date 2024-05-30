<?php
require_once __DIR__ . '/../../controllers/EmpresaController.php';
$controller = new EmpresaController();
$empresa = $controller->index();
?>

<?php
include("../../public/includ/head.php");
// Verificar si el rol en la sesión es "superadministrador"
if ($_SESSION['user']['rol'] !== 'SUPERADMINISTRADOR') {
  // Redireccionar a otra página
  header('Location: ../Location/11.php');
  exit; // Importante terminar el script después de la redirección
}
include("../../public/includ/nav.php");
include("../../public/includ/aside.php");
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
          <i class="fa-solid fa-plus"></i> Empresa
        </button>

        <!-- Modal -->
        <?php include('ModalRegistarEmpresa.php') ?>

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
                <?php while ($row = $empresa->fetch(PDO::FETCH_ASSOC)) :
                  $EmpresaEdiatr = $controller->read($row['nit']);
                ?>
                  <tr>
                    <td><strong><?php echo htmlspecialchars($row['nit']); ?></strong></td>
                    <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($row['telefono']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['estado']); ?></td>
                    <td><?php echo htmlspecialchars($row['prefijo']); ?></td>
                    <td><?php echo htmlspecialchars($row['fecha_ultima_modificacion']); ?></td>
                    <td><?php echo htmlspecialchars($row['fecha_creacion']); ?></td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a data-toggle="modal" data-target="#EditarEmpresa<?php echo ($row['nit']); ?>" class="dropdown-item" id="editar"><i class="fa-solid fa-pen-to-square"></i> Editar</a></li>
                          <li><a class="dropdown-item" id="eliminar" href="delete.php?nit=<?php echo $row['nit']; ?>"><i class="fa-solid fa-trash-can"></i> Eliminar</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <!-- Modal -->
                  <?php include('ModalEditarEmpresa.php') ?>
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