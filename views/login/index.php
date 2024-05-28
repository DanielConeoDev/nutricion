<?php
require_once '../../controllers/LoginController.php';

// Verificar si la sesión está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si el usuario ya está autenticado, si es así, redirigirlo a la página de bienvenida
if (isset($_SESSION['user'])) {
    header("Location: ../../public/index.php");
    exit();
}

// Procesar el formulario de inicio de sesión si se envió
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new LoginController;
    $controller->auth($_POST['username'], $_POST['password']);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>

<body>
    <?php
    if (isset($_GET['msg']) && $_GET['msg'] == 'error') {
        echo "<p style='color:red;'>Usuario o contraseña incorrectos</p>";
    }
    ?>
    <form action="" method="POST">
        <label for="username">Usuario:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>

</html>