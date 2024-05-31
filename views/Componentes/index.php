<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../login/index.php");
    exit();
}
?>
<?php
include("../../public/includ/head.php");
// Este código verifica si el rol del usuario no es SUPERADMINISTRADOR, ADMINISTRADOR o NUTRICIONISTA.
// Si el rol no es ninguno de estos, redirecciona al usuario a otra página.
if (
    $_SESSION['user']['rol'] !== 'SUPERADMINISTRADOR' &&
    $_SESSION['user']['rol'] !== 'ADMINISTRADOR' &&
    $_SESSION['user']['rol'] !== 'NUTRICIONISTA'
) {
    header('Location: ../Location/11.php');
    exit;
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
                    <i class="fa-solid fa-add"></i></i> Componentes
                </button>

                <!-- Modal -->
                <?php include('ModalRegistrarComponentes.php') ?>

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
                        <?php include('TablaComponentes.php') ?>
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