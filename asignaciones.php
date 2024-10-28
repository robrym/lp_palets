<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Configuración CSS y JS igual que en las vistas anteriores -->

<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $palet_id = $_POST['palet_id'] ?? '';
    $cliente_id = $_POST['cliente_id'] ?? '';
    $resultado = agregarAsignacion($palet_id, $cliente_id);
    echo "<div class='alert alert-info'>{$resultado}</div>";
}

if (isset($_GET['delete_id'])) {
    $asignacion_id = (int)$_GET['delete_id'];
    $resultado = borrarAsignacion($asignacion_id);
    echo "<div class='alert alert-info'>{$resultado}</div>";
}

$asignaciones = obtenerAsignaciones();
?>

<!-- Vista similar a las anteriores para mostrar la tabla de asignaciones -->

<!-- Form Modal para asignaciones -->
<div class="modal fade" id="modalAsignacion" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-fromright">
    <div class="modal-content">
      <form action="asignaciones.php" method="POST">
        <div class="block-content">
          <div class="mb-4">
            <label class="form-label" for="palet_id">ID Palet</label>
            <input type="number" class="form-control" id="palet_id" name="palet_id" required>
          </div>
          <div class="mb-4">
            <label class="form-label" for="cliente_id">ID Cliente</label>
            <input type="number" class="form-control" id="cliente_id" name="cliente_id" required>
          </div>
          <button type="submit" class="btn btn-alt-primary">Asignar</button>
          <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require 'inc/_global/views/footer_end.php'; ?>