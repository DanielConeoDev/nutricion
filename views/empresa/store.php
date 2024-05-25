<?php
require_once '../../controllers/EmpresaController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new EmpresaController();
    $controller->create($_POST['nit'], $_POST['nombre'], $_POST['estado'], $_POST['telefono'], $_POST['email'], $_POST['prefijo']);
    header("Location: index.php");
    exit();
}
?>
