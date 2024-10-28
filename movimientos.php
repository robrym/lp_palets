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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $palet_id = $_POST['palet_id'] ?? '';
    $almacen_id = $_POST['almacen_id'] ?? '';
    $tipo_movimiento = $_POST['tipo_movimiento'] ?? '';

    $resultado = agregarMovimiento($palet_id, $almacen_id, $tipo_movimiento);
    echo "<div class='alert alert-info'>{$resultado}</div>";
}

if (isset($_GET['delete_id'])) {
    $movimiento_id = (int)$_GET['delete_id'];
    $resultado = borrarMovimiento($movimiento_id);
    echo "<div class='alert alert-info'>{$resultado}</div>";
}

$movimientos = obtenerMovimientos();
?>

<!-- Page Content -->
<div class="content">
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modalMovimiento"><i class="fa fa-plus opacity-50 me-1"></i> Movimiento</button>
      </h3>
    </div>
    <div class="block-content block-content-full overflow-x-auto">
      <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
        <thead>
            <tr>
                <th>#</th>
                <th>Palet ID</th>
                <th>Almacén ID</th>
                <th>Tipo Movimiento</th>
                <th>Fecha Movimiento</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movimientos as $movimiento): ?>
                <tr>
                    <td><?php echo htmlspecialchars($movimiento['id']); ?></td>
                    <td><?php echo htmlspecialchars($movimiento['palet_id']); ?></td>
                    <td><?php echo htmlspecialchars($movimiento['almacen_id']); ?></td>
                    <td><?php echo htmlspecialchars($movimiento['tipo_movimiento']); ?></td>
                    <td><?php echo htmlspecialchars($movimiento['fecha_movimiento']); ?></td>
                    <td>
                        <a href="movimientos.php?delete_id=<?php echo $movimiento['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar movimiento?');"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Form Modal Movimiento -->
<div class="modal fade" id="modalMovimiento" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-fromright">
    <div class="modal-content">
      <form action="movimientos.php" method="POST">
        <div class="block-content">
          <div class="mb-4">
            <label class="form-label" for="palet_id">ID Palet</label>
            <input type="number" class="form-control" id="palet_id" name="palet_id" required>
          </div>
          <div class="mb-4">
            <label class="form-label" for="almacen_id">ID Almacén</label>
            <input type="number" class="form-control" id="almacen_id" name="almacen_id" required>
          </div>
          <div class="mb-4">
            <label class="form-label" for="tipo_movimiento">Tipo de Movimiento</label>
            <select class="form-control" id="tipo_movimiento" name="tipo_movimiento" required>
              <option value="entrada">Entrada</option>
              <option value="salida">Salida</option>
            </select>
          </div>
          <button type="submit" class="btn btn-alt-primary">Guardar</button>
          <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require 'inc/_global/views/footer_end.php'; ?>
