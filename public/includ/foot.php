</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Proyecto
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2024 <a class="text-danger text-decoration-none" href="https://www.unisinu.edu.co/">Universidad del Sinú Elías Bechara Zainúm, Seccional Cartagena</a>.</strong>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src="../../public/dist/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>

<script>
    new DataTable('#example');
</script>

<script>
  // Asegúrate de que el identificador del modal en el script coincida con el definido en el HTML
  const myModal = document.getElementById('exampleModal');

  // Agrega un listener para el evento 'shown.bs.modal' que se dispara cuando el modal se muestra
  myModal.addEventListener('shown.bs.modal', function () {
    // Busca un elemento dentro del modal para enfocar
    const myInput = myModal.querySelector('input');
    // Si se encuentra el elemento, enfócalo
    if (myInput) {
      myInput.focus();
    }
  });
</script>

</body>

</html>