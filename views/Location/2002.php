<?php
include("../../public/includ/head.php");
include("../../public/includ/nav.php");
include("../../public/includ/aside.php");
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>2002 Error</h1>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="error-page">
        <h2 class="headline text-danger">2002</h2>
        <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-danger"></i> ¡Ups! Parece que ha ocurrido un error en la conexion a la base de datos.</h3>
            <p>
                No se puede conectar al servidor MySQL (servidor incorrecto o MySQL no está corriendo).
            </p>
        </div>
    </div>

</section>

<?php
include("../../public/includ/foot.php");
?>