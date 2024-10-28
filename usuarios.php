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
  $email = $_POST['email'] ?? '';
  $nivel_permiso = $_POST['nivel_permiso'] ?? '';
  $password = $_POST['password'] ?? '';

  if (isset($_POST['usuario_id']) && !empty($_POST['usuario_id'])) {
      // Modificar usuario existente
      $usuario_id = (int)$_POST['usuario_id'];
      $resultado = modificarUsuario($usuario_id, $nombre, $email, $nivel_permiso, $password);
      echo "<div class='alert alert-info'>{$resultado}</div>";
  } else {
      // Agregar nuevo usuario
      $resultado = agregarUsuario($nombre, $email, $password, $nivel_permiso);
      echo "<div class='alert alert-info'>{$resultado}</div>";
  }
}

// Verificar si se ha enviado una solicitud para eliminar un usuario
if (isset($_GET['delete_id'])) {
  $usuario_id = (int)$_GET['delete_id'];
  $resultado = borrarUsuario($usuario_id);
  echo "<div class='alert alert-info'>{$resultado}</div>";
}

?>

<?php $usuarios = obtenerUsuarios(); ?>

<!-- Page Content -->
<div class="content">
  <!-- Heading -->
  <div class="block block-rounded">
    <div class="block-content block-content-full overflow-x-auto">
      <div class="py-3 text-center">
        <h1 class="h3 fw-extrabold mb-1">Usuarios</h1>
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
          <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modalUsuario"><i class="fa fa-plus opacity-50 me-1"></i> Usuario</button>
        </div>
      </h3>
    </div>
    <div class="block-content block-content-full overflow-x-auto">
      <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="d-none d-sm-table-cell" style="width: 25%; text-align:center;">Nombre</th>
                <th class="d-none d-sm-table-cell" style="text-align:center;">Email</th>
                <th class="d-none d-sm-table-cell" style="text-align:center;">Nivel de Permiso</th>
                <th class="d-none d-sm-table-cell" style="width: 15%; text-align:center;">Estado</th>
                <th class="d-none d-sm-table-cell text-center" style="width: 15%; text-align:center;">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($usuarios)): ?>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td class="text-center"><?php echo htmlspecialchars($usuario['id']); ?></td>
                        <td class="fw-semibold"><?php echo htmlspecialchars($usuario['nombre']); ?></td>
                        <td class="d-none d-sm-table-cell"><?php echo htmlspecialchars($usuario['email']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['nivel_permiso']); ?></td>
                        <td class="d-none d-sm-table-cell" style="text-align:center;">
                            <?php if ($usuario['estado'] === 'activo'): ?>
                                <span class="badge bg-success">Activo</span>
                            <?php else: ?>
                                <span class="badge bg-danger">Inactivo</span>
                            <?php endif; ?>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                            <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#modalUsuario"
                                    data-id="<?php echo htmlspecialchars($usuario['id']); ?>"
                                    data-nombre="<?php echo htmlspecialchars($usuario['nombre']); ?>"
                                    data-email="<?php echo htmlspecialchars($usuario['email']); ?>"
                                    data-nivel_permiso="<?php echo htmlspecialchars($usuario['nivel_permiso']); ?>">
                                <i class="fa fa-pencil-alt"></i>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">No hay usuarios registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Dynamic Table Full -->
</div>
<!-- END Page Content -->

<!-- Form Modal Usuario -->
<div class="modal fade" id="modalUsuario" tabindex="-1" role="dialog" aria-labelledby="modalUsuario" aria-hidden="true">
  <div class="modal-dialog modal-dialog-fromright" role="document">
    <div class="modal-content">
      <div class="block block-rounded mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Datos del Usuario</h3>
          <button type="button" class="btn btn-alt-danger" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa fa-times"></i>
          </button>
        </div>
        <div class="block-content">
          <form id="formUsuario" action="usuarios.php" method="POST">
            <div class="row push">
              <div class="col-lg-12">
                <input type="hidden" id="usuario_id" name="usuario_id">
                <div class="mb-4">
                  <label class="form-label" for="nombre">Nombre del Usuario</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del usuario" required>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el email del usuario" required>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="nivel_permiso">Nivel de Permiso</label>
                  <select class="form-control" id="nivel_permiso" name="nivel_permiso" required>
                    <option value="admin">Admin</option>
                    <option value="operador">Operador</option>
                    <option value="cliente">Cliente</option>
                  </select>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="password">Contraseña</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese la contraseña">
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
<!-- END Form Modal Usuario -->

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
    const modalUsuario = document.getElementById('modalUsuario');
    modalUsuario.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const usuarioId = button.getAttribute('data-id');
        const nombre = button.getAttribute('data-nombre');
        const email = button.getAttribute('data-email');
        const nivelPermiso = button.getAttribute('data-nivel_permiso');

        modalUsuario.querySelector('#usuario_id').value = usuarioId || '';
        modalUsuario.querySelector('#nombre').value = nombre || '';
        modalUsuario.querySelector('#email').value = email || '';
        modalUsuario.querySelector('#nivel_permiso').value = nivelPermiso || '';
    });
});
</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
