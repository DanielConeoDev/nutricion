<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("Location: ../login/index.php");
        exit();
    }
?>
<?php
require_once __DIR__ . '/../../controllers/UsuarioController.php';
require_once __DIR__ . '/../../controllers/EmpresaController.php';

$controller = new UsuarioController();
$usuario = $controller->index();

$controllerEmpresa = new EmpresaController();
$empresa = $controllerEmpresa->indexSelectActive();


include("../../public/includ/head.php");
include("../../public/includ/nav.php");
include("../../public/includ/aside.php");
?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="content">
  <div class="container-fluid">
    
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<?php
include("../../public/includ/foot.php");
?>