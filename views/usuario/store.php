<?php
require_once '../../controllers/UsuarioController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new UsuarioController();
    $controller->create($_POST['nombre'], $_POST['email'], $_POST['password'], $_POST['rol'], $_POST['estado'], $_POST['imagen'], $_POST['empresa']);
    
    header("Location: index.php");
    exit();
}
?>
