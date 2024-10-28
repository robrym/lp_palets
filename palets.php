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
  $nfc_identifier = $_POST['nfc_identifier'] ?? '';
  $color = $_POST['color'] ?? '';
  $status = $_POST['status'] ?? '';

  if (isset($_POST['palet_id']) && !empty($_POST['palet_id'])) {
      // Modificar palet existente
      $palet_id = (int)$_POST['palet_id'];
      $resultado = modificarPalet($palet_id, $nfc_identifier, $color, $status);
      echo "<div class='alert alert-info'>{$resultado}</div>";
  } else {
      // Agregar nuevo palet
      $resultado = agregarPalet($nfc_identifier, $color, $status);
      echo "<div class='alert alert-info'>{$resultado}</div>";
  }
}

// Verificar si se ha enviado una solicitud para eliminar un palet
if (isset($_GET['delete_id'])) {
  $palet_id = (int)$_GET['delete_id'];
  $resultado = borrarPalet($palet_id);
  echo "<div class='alert alert-info'>{$resultado}</div>";
}

?>

<?php $palets = obtenerPalets(); ?>

<!-- Page Content -->
<div class="content">
  <!-- Heading -->
  <div class="block block-rounded">
    <div class="block-content block-content-full overflow-x-auto">
      <div class="py-3 text-center">
        <h1 class="h3 fw-extrabold mb-1">Palets</h1>
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
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modalPalet"><i class="fa fa-plus opacity-50 me-1"></i> Palet</button>
        </div>
      </h3>
    </div>
    <div class="block-content block-content-full overflow-x-auto">
      <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="d-none d-sm-table-cell" style="text-align:center;">Identificador NFC</th>
                <th class="d-none d-sm-table-cell" style="text-align:center;">Color</th>
                <th class="d-none d-sm-table-cell" style="width: 15%; text-align:center;">Estado</th>
                <th class="d-none d-sm-table-cell text-center" style="width: 15%; text-align:center;">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($palets)): ?>
                <?php foreach ($palets as $palet): ?>
                    <tr>
                        <td class="text-center"><?php echo htmlspecialchars($palet['id']); ?></td>
                        <td><?php echo htmlspecialchars($palet['nfc_identifier']); ?></td>
                        <td><?php echo htmlspecialchars($palet['color']); ?></td>
                        <td class="d-none d-sm-table-cell" style="text-align:center;">
                            <?php if ($palet['status'] === 'activo'): ?>
                                <span class="badge bg-success">Activo</span>
                            <?php else: ?>
                                <span class="badge bg-danger">Inactivo</span>
                            <?php endif; ?>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                            <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#modalPalet"
                                    data-id="<?php echo htmlspecialchars($palet['id']); ?>"
                                    data-nfc_identifier="<?php echo htmlspecialchars($palet['nfc_identifier']); ?>"
                                    data-color="<?php echo htmlspecialchars($palet['color']); ?>"
                                    data-status="<?php echo htmlspecialchars($palet['status']); ?>">
                                <i class="fa fa-pencil-alt"></i>
                            </button>
                            <a href="palets.php?delete_id=<?php echo $palet['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este palet?');">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">No hay palets registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Dynamic Table Full -->
</div>
<!-- END Page Content -->

<!-- Form Modal Palet -->
<div class="modal fade" id="modalPalet" tabindex="-1" role="dialog" aria-labelledby="modalPalet" aria-hidden="true">
  <div class="modal-dialog modal-dialog-fromright" role="document">
    <div class="modal-content">
      <div class="block block-rounded mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Datos del Palet</h3>
          <button type="button" class="btn btn-alt-danger" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa fa-times"></i>
          </button>
        </div>
        <div class="block-content">
          <form id="formPalet" action="palets.php" method="POST">
            <div class="row push">
              <div class="col-lg-12">
                <input type="hidden" id="palet_id" name="palet_id">
                <div class="mb-4">
                  <label class="form-label" for="nfc_identifier">Identificador NFC</label>
                  <input type="text" class="form-control" id="nfc_identifier" name="nfc_identifier" placeholder="Ingrese el identificador NFC" required>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="color">Color</label>
                  <select class="form-control" id="color" name="color" required>
                    <option value="Rojo">Rojo</option>
                    <option value="Blanco">Blanco</option>
                    <option value="Azul">Azul</option>
                    <option value="Amarillo">Amarillo</option>
                    <option value="Calabaza">Calabaza</option>
                  </select>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="status">Estado</label>
                  <select class="form-control" id="status" name="status" required>
                    <option value="activo">Activo</option>
                    <option value="inactivo">Inactivo</option>
                  </select>
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
<!-- END Form Modal Palet -->

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
    const modalPalet = document.getElementById('modalPalet');
    modalPalet.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const paletId = button.getAttribute('data-id');
        const nfcIdentifier = button.getAttribute('data-nfc_identifier');
        const color = button.getAttribute('data-color');
        const status = button.getAttribute('data-status');

        modalPalet.querySelector('#palet_id').value = paletId || '';
        modalPalet.querySelector('#nfc_identifier').value = nfcIdentifier || '';
        modalPalet.querySelector('#color').value = color || '';
        modalPalet.querySelector('#status').value = status || '';
    });
});
</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
