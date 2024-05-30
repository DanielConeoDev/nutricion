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

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Panyc!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!-- Login 5 - Bootstrap Brain Component -->
    <section class="p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="card border-light-subtle shadow-sm">
                <div class="row g-0">
                    <div class="col-12 col-md-6 text-bg-danger d-none d-md-block">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <div class="col-10 col-xl-8 py-3 text-center">
                                <img class="img-fluid rounded mb-4" loading="lazy" src="https://unisinucartagena.edu.co/wp-content/uploads/2019/05/logo-unisinu-cartagena-blanco.png" width="400" height="80" alt="Unisinu Logo">
                                <hr class="border-primary-subtle mb-4">
                                <h2 class="h1 mb-4">Bienvenido a Panyc!</h2>
                                <p class="lead m-0">Nuestro sistema ofrece planes dietéticos personalizados, seguimiento de la salud y orientación experta para ayudarte a lograr una nutrición y bienestar óptimos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5">
                                        <h3>Login</h3>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (isset($_GET['msg'])) {
                                $msg = $_GET['msg'];
                                echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                let message = '';
                let alertType = 'error';
                if ('$msg' === 'no_activo') {
                    message = 'Usuario No Activo';
                } else if ('$msg' === 'incorrecto') {
                    message = 'Usuario o contraseña incorrectos';
                }
                Swal.fire({
                    icon: alertType,
                    title: 'Error',
                    text: message
                });
            });
            </script>";
                            }
                            ?>
                            <form action="" method="POST">
                                <div class="row gy-3 gy-md-4 overflow-hidden">
                                    <div class="col-12">
                                        <label for="username" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="username" id="username" placeholder="name@example.com" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="password" id="password" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn bsb-btn-xl btn-danger" type="submit">Inicia sesión ahora</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-12">
                                    <hr class="mt-5 mb-4 border-secondary-subtle">
                                    <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                                        <a href="#!" class="link-secondary text-decoration-none">Web Oficial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>