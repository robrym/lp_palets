<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css'); ?>
<?php $cb->get_css('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css'); ?>
<?php $cb->get_css('js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<?php 

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'] ?? '';
  $ubicacion = $_POST['ubicacion'] ?? '';

  if (isset($_POST['almacen_id']) && !empty($_POST['almacen_id'])) {
      // Modificar almacén existente
      $almacen_id = (int)$_POST['almacen_id'];
      $resultado = modificarAlmacen($almacen_id, $nombre, $ubicacion);
      echo "<div class='alert alert-info'>{$resultado}</div>";
  } else {
      // Agregar nuevo almacén
      $resultado = agregarAlmacen($nombre, $ubicacion);
      echo "<div class='alert alert-info'>{$resultado}</div>";
  }
}

// Verificar si se ha enviado una solicitud para eliminar un almacén
if (isset($_GET['delete_id'])) {
  $almacen_id = (int)$_GET['delete_id'];
  $resultado = borrarAlmacen($almacen_id);
  echo "<div class='alert alert-info'>{$resultado}</div>";
}

?>

<?php $almacenes = obtenerAlmacenes(); ?>

<!-- Page Content -->
<div class="content">
  <!-- Heading -->
  <div class="block block-rounded">
    <div class="block-content block-content-full overflow-x-auto">
      <div class="py-3 text-center">
        <h1 class="h3 fw-extrabold mb-1">Almacenes</h1>
        <h2 class="fs-sm fw-medium text-muted mb-0">Vista generada automáticamente</h2>
      </div>
    </div>
  </div>
  <!-- END Heading -->

  <!-- Dynamic Table Full -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        <div class="col-md-6 col-xl-3">
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modalAlmacen"><i class="fa fa-plus opacity-50 me-1"></i> Almacén</button>
        </div>
      </h3>
    </div>
    <div class="block-content block-content-full overflow-x-auto">
      <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="d-none d-sm-table-cell" style="width: 25%; text-align:center;">Nombre</th>
                <th class="d-none d-sm-table-cell" style="text-align:center;">Ubicación</th>
                <th class="d-none d-sm-table-cell text-center" style="width: 15%; text-align:center;">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($almacenes)): ?>
                <?php foreach ($almacenes as $almacen): ?>
                    <tr>
                        <td class="text-center"><?php echo htmlspecialchars($almacen['id']); ?></td>
                        <td class="fw-semibold"><?php echo htmlspecialchars($almacen['nombre']); ?></td>
                        <td class="d-none d-sm-table-cell"><?php echo htmlspecialchars($almacen['ubicacion']); ?></td>
                        <td class="d-none d-sm-table-cell text-center">
                            <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#modalAlmacen"
                                    data-id="<?php echo htmlspecialchars($almacen['id']); ?>"
                                    data-nombre="<?php echo htmlspecialchars($almacen['nombre']); ?>"
                                    data-ubicacion="<?php echo htmlspecialchars($almacen['ubicacion']); ?>">
                                <i class="fa fa-pencil-alt"></i>
                            </button>
                            <a href="almacenes.php?delete_id=<?php echo $almacen['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este almacén?');">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">No hay almacenes registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Dynamic Table Full -->
</div>
<!-- END Page Content -->

<!-- Form Modal Almacen -->
<div class="modal fade" id="modalAlmacen" tabindex="-1" role="dialog" aria-labelledby="modalAlmacen" aria-hidden="true">
  <div class="modal-dialog modal-dialog-fromright" role="document">
    <div class="modal-content">
      <div class="block block-rounded mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Datos del Almacén</h3>
          <button type="button" class="btn btn-alt-danger" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa fa-times"></i>
          </button>
        </div>
        <div class="block-content">
          <form id="formAlmacen" action="almacenes.php" method="POST">
            <div class="row push">
              <div class="col-lg-12">
                <input type="hidden" id="almacen_id" name="almacen_id">
                <div class="mb-4">
                  <label class="form-label" for="nombre">Nombre del Almacén</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del almacén" required>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="ubicacion">Ubicación</label>
                  <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="Ingrese la ubicación del almacén" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 text-end">
                <button type="submit" class="btn btn-alt-primary">Guardar</button>
                <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Form Modal Almacen -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for DataTables plugin) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/datatables/dataTables.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-buttons/dataTables.buttons.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-buttons-jszip/jszip.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js'); ?>
<?php $cb->get_js('js/plugins/datatables-buttons/buttons.print.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables-buttons/buttons.html5.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_tables_datatables.min.js'); ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modalAlmacen = document.getElementById('modalAlmacen');
    modalAlmacen.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const almacenId = button.getAttribute('data-id');
        const nombre = button.getAttribute('data-nombre');
        const ubicacion = button.getAttribute('data-ubicacion');

        modalAlmacen.querySelector('#almacen_id').value = almacenId || '';
        modalAlmacen.querySelector('#nombre').value = nombre || '';
        modalAlmacen.querySelector('#ubicacion').value = ubicacion || '';
    });
});
</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
