<?php
require_once '../../controllers/EmpresaController.php';

if (isset($_GET['nit'])) {
    $controller = new EmpresaController();
    $controller->delete($_GET['nit']);
    header("Location: index.php");
    exit();
}
?>
