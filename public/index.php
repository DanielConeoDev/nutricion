<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user'])) {
    header("Location: ../views/login/index.php");
    exit();
}

header("Location: ../views/inicio/index.php");
