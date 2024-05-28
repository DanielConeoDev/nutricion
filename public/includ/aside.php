<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-decoration-none">
        <img src="https://i0.wp.com/unisinucartagena.edu.co/wp-content/uploads/2018/10/cropped-universidad-en-cartagena-carreras-favico-200x200.png?ssl=1" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PANYC!</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://img.freepik.com/vector-premium/icono-circulo-usuario-anonimo-ilustracion-vector-estilo-plano-sombra_520826-1931.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php
                if (isset($_SESSION['user']) && $_SESSION['user']['rol'] === 'SUPERADMINISTARDOR') {
                ?>
                    <li class="nav-header">ADMINISTRACIÓN</li>
                    <li class="nav-item">
                        <a href="<?php echo BASE_URL; ?>views/empresa/index.php" class="nav-link">
                            <i class="nav-icon fa-solid fa-briefcase"></i>
                            <p>
                                EMPRESA 
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo BASE_URL; ?>views/usuario/index.php" class="nav-link">
                            <i class="nav-icon fa-solid fa-user-large"></i>
                            <p>
                                USUARIO
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">