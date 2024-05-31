<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: ../login/index.php");
  exit();
}

include("../../public/includ/head.php");
include("../../public/includ/nav.php");
include("../../public/includ/aside.php");
?>

<div class="content-header">
  <div class="container-fluid">
    Este dejalo en Blanco
  </div>
</div>

<div class="content">
  <div class="container-fluid">
    Aqui el contenido
  </div>
</div>

<?php
include("../../public/includ/foot.php");
?>