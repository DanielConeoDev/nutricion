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
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
            <div class="image">
                <img src="<?php echo $_SESSION['user']['imagen'] ?>" class="img-circle elevation-2" alt="Image">
            </div>
            <div class="info">
                <!-- Nombre en negrita con color blanco -->
                <span style="font-weight: bold; color: white;"><?php echo $_SESSION['user']['nombre'] ?></span><br>
                <!-- Rol con color blanco -->
                <span style="color: white;"><?php echo $_SESSION['user']['rol'] ?></span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php
                if (
                    isset($_SESSION['user']) &&
                    ($_SESSION['user']['rol'] === 'SUPERADMINISTRADOR' ||
                        $_SESSION['user']['rol'] === 'ADMINISTRADOR' ||
                        $_SESSION['user']['rol'] === 'NUTRICIONISTA')
                ) {
                    // El código dentro de este bloque se ejecutará si el rol es SUPERADMINISTRADOR, ADMINISTRADOR o NUTRICIONISTA    
                ?>
                    <li class="nav-header">TAC</li>
                    <li class="nav-item">
                        <a href="<?php echo BASE_URL; ?>views/usuario/index.php" class="nav-link">
                            <i class="nav-icon fa-solid fa-apple-whole"></i>
                            <p>
                                ALIMENTOS
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo BASE_URL; ?>views/usuario/index.php" class="nav-link">
                            <i class="nav-icon  fa-solid fa-circle-info"></i>
                            <p>
                                FUENTES
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo BASE_URL; ?>views/usuario/index.php" class="nav-link">
                            <i class="nav-icon fa-solid fa-sitemap"></i>
                            <p>
                                GRUPOS
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav- icon fa-solid fa-atom"></i>
                            <p>
                                &nbsp PARÁMETROS
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/charts/chartjs.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>COMPONENTES</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/flot.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SUBCOMPONENTES</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo BASE_URL; ?>views/PartesAnalizadas/index.php" class="nav-link">
                            <i class="nav-icon fa-solid fa-eye-dropper"></i>
                            <p>
                                PARTES ANALIZADAS
                            </p>
                        </a>
                    </li>
                <?php
                }
                ?>
                <?php
                if (isset($_SESSION['user']) && $_SESSION['user']['rol'] === 'SUPERADMINISTRADOR') {
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