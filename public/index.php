<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user'])) {
    header("Location: ../views/login/index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>

<body>
    <?php
    if (isset($_SESSION['user'])) {
        echo "<h1>Bienvenido, " . $_SESSION['user']['nombre'] . "</h1>";
        echo "<p>Rol: " . $_SESSION['user']['rol'] . "</p>";
        echo "<a href='../views/login/logout.php'>Cerrar sesión</a>";
    } else {
        echo "<p>No estás autenticado.</p>";
    }
    ?>
</body>

</html>