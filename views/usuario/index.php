<?php
require_once __DIR__ . '/../../controllers/UsuarioController.php';
$controller = new UsuarioController();
$usuario = $controller->index();
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
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
        <i class="fa-solid fa-user-plus"></i></i> Usuario
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
           <?php include('TablaUsuario.php') ?>
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