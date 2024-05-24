<?php
include("../../public/includ/head.php");
include("../../public/includ/nav.php");
include("../../public/includ/aside.php");
?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <button type="button" class="btn btn-outline-danger">Agregar Empresa</button>
      </div><!-- /.col -->
      <div class="col-sm-6">

      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-danger card-outline">
          <div class="card-body table-responsive">
            <table id="example" class="table table-striped table-bordered table-hover table-sm " style="width:100%">
              <thead>
                <tr>
                  <th>Nit</th>
                  <th>Nombre</th>
                  <th>Estado</th>
                  <th>Telefono</th>
                  <th>Email</th>
                  <th>Prefijo</th>
                  <th>Fecha creacion</th>
                  <th>Fecha ultima modificacion</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011-04-25</td>
                  <td>
                    <div class="btn-group">
                      <!-- <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa-solid fa-ellipsis-vertical"></i>
                      </button> -->
<!--                       <button type="button" class="btn btn-outline-primary">Editar</button>
                      <button type="button" class="btn btn-outline-danger">Eliminar</button>
                      <ul class="dropdown-menu"> -->
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-pen-to-square"></i> Editar</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash-can"></i> Eliminar</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div><!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<?php
include("../../public/includ/foot.php");
?>