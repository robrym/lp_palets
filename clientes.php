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
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['generar_instalacion'])) {
  // Recoger los datos enviados desde el formulario
  $nombre_cliente = $_POST['nombre_cliente'] ?? '';
  $email_cliente = $_POST['email_cliente'] ?? '';
  $cif = $_POST['cif'] ?? '';
  $telefono = $_POST['telefono'] ?? '';

 

  // Verificar si estamos agregando o modificando
  if (isset($_POST['cliente_id']) && !empty($_POST['cliente_id'])) {
      // Modificar cliente existente
      $cliente_id = (int)$_POST['cliente_id'];

      $cliente_id = (int)$_POST['cliente_id'];
      $resultado = modificarCliente($cliente_id, $nombre_cliente, $email_cliente, $cif, $telefono);
      echo "<div class='alert alert-info'>{$resultado}</div>";
      
  } else {
      // Agregar nuevo cliente
      $resultado = agregarCliente($nombre_cliente, $email_cliente, $cif, $telefono);
      echo "<div class='alert alert-info'>{$resultado}</div>";
  }
}

// Verificar si se ha enviado una solicitud para eliminar un cliente
if (isset($_GET['delete_id'])) {
  $cliente_id = (int)$_GET['delete_id'];
  $resultado = borrarCliente($cliente_id);
  echo "<div class='alert alert-info'>{$resultado}</div>";
}

?>

<?php $clientes = obtenerClientes(); ?>

<?php
// Verificar si se ha enviado el formulario para generar una instalación
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['generar_instalacion'])) {
  // Obtener el ID del cliente desde el formulario
  $cliente_id = (int)$_POST['cliente_id'];

  // Obtener los datos del cliente por su ID para usar el nombre
  $cliente = obtenerClientePorId($cliente_id);
  if ($cliente) {
      $nombre_cliente = $cliente['nombre_cliente'];
      $resultado = generarInstalacion($cliente_id, $nombre_cliente);
      echo "<div class='alert alert-info'>{$resultado}</div>";
  } else {
      echo "<div class='alert alert-danger'>No se encontró el cliente.</div>";
  }
}
?>

<!-- Page Content -->
<div class="content">
  <!-- Heading -->
  <div class="block block-rounded">
    <div class="block-content block-content-full overflow-x-auto">
      <div class="py-3 text-center">
        <h1 class="h3 fw-extrabold mb-1">
          Clientes
        </h1>
        <h2 class="fs-sm fw-medium text-muted mb-0">
          Vista generada automaticamente
        </h2>
      </div>
    </div>
  </div>
  <!-- END Heading -->

  <!-- Dynamic Table Full -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        
       <div class="col-md-6 col-xl-3">
      <!-- From Right Modal -->
      <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modalCliente"><i class="fa fa-plus opacity-50 me-1"></i> Cliente</button>
       
       
      <!-- END From Right Modal -->
    </div>
      </h3>
    </div>
    <div class="block-content block-content-full overflow-x-auto">
      <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
     
      <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
        <thead>
            <tr>
                <th class="text-center" style="text-align:center;">#</th>
                <th class="d-none d-sm-table-cell" style="width: 25%;text-align:center;">Nombre</th>
                <th class="d-none d-sm-table-cell"  style="text-align:center;">Email</th>
                <th class="d-none d-sm-table-cell"  style="text-align:center;">CIF/NIF</th>
                <th class="d-none d-sm-table-cell"  style="text-align:center;">Teléfono</th>
                <th class="d-none d-sm-table-cell" style="width: 15%;text-align:center;">FacturaScript</th>
                <th class="d-none d-sm-table-cell text-center" style="width: 15%;text-align:center;">Acceso</th>
                <th class="d-none d-sm-table-cell text-center" style="width: 15%;text-align:center;">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($clientes)): ?>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td class="text-center"><?php echo htmlspecialchars($cliente['id']); ?></td>
                        <td class="fw-semibold"><?php echo htmlspecialchars($cliente['nombre_cliente']); ?></td>
                        <td class="d-none d-sm-table-cell"><?php echo htmlspecialchars($cliente['email_cliente']); ?></td>
                        <td><?= htmlspecialchars($cliente['cif']) ?></td>
                        <td><?= htmlspecialchars($cliente['telefono']) ?></td>
                        <td class="d-none d-sm-table-cell" style="text-align:center;">
                            <?php if ($cliente['tiene_facturacion']): ?>
                                <span class="badge bg-success">Instalado</span>
                            <?php else: ?>
                                <span class="badge bg-danger">Sin Instalar</span>
                            <?php endif; ?>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                            <?php if (!empty($cliente['url_instalacion'])): ?>
                                <span class="badge bg-primary"><?php echo htmlspecialchars($cliente['url_instalacion']); ?></span>
                                <span class="badge bg-warning">admin / admin</span>
                            <?php else: ?>
                                <span class="badge bg-secondary">Sin URL</span>
                            <?php endif; ?>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">

                        <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled"  data-bs-toggle="modal" data-bs-target="#modalCliente"
                                data-id="<?= htmlspecialchars($cliente['id']) ?>"
                                data-nombre="<?= htmlspecialchars($cliente['nombre_cliente']) ?>"
                                data-email="<?= htmlspecialchars($cliente['email_cliente']) ?>"
                                data-cif="<?= htmlspecialchars($cliente['cif']) ?>"
                                data-telefono="<?= htmlspecialchars($cliente['telefono']) ?>">
                          <i class="fa fa-pencil-alt"></i>
                        </button>
                        
                          
                          
                          <?php if (!$cliente['tiene_facturacion']): ?>
                              <form method="POST" action="clientes.php" class="d-inline">
                                  <input type="hidden" name="cliente_id" value="<?php echo $cliente['id']; ?>">
                                 
                                  <button type="submit" name="generar_instalacion" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="Generar Instalación">
                                  <i class="fa fa-wrench"></i>
                                  </button>
                              </form>
                          <?php endif; ?>
                      </td>

                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">No hay clientes registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    </div>
  </div>
  <!-- END Dynamic Table Full -->

  <!-- Dynamic Table Responsive -->
</div>
<!-- END Page Content -->


<!-- Form Modal Client -->
<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="modalCliente" aria-hidden="true">
    <div class="modal-dialog modal-dialog-fromright" role="document">
    <div class="modal-content">
            <div class="block block-rounded mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Datos del Cliente</h3>
                    <button type="button" class="btn btn-alt-danger" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="block-content">
                    <form id="formCliente" action="clientes.php" method="POST">
                        <div class="row push">
                            <div class="col-lg-12">
                                <input type="hidden" id="cliente_id" name="cliente_id">
                                <div class="mb-4">
                                    <label class="form-label" for="nombre_cliente">Nombre del Cliente</label>
                                    <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" placeholder="Ingrese el nombre del cliente" required>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="email_cliente">Email</label>
                                    <input type="email" class="form-control" id="email_cliente" name="email_cliente" placeholder="Ingrese el email del cliente" required>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="cif">CIF</label>
                                    <input type="text" class="form-control" id="cif" name="cif" placeholder="Ingrese el CIF del cliente" required>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="telefono">Teléfono</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el teléfono del cliente" required>
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
  <!-- END Form Modal Client-->


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
    const modalCliente = document.getElementById('modalCliente');
    modalCliente.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget; // Botón que activó el modal
        const clienteId = button.getAttribute('data-id');
        const nombre = button.getAttribute('data-nombre');
        const email = button.getAttribute('data-email');
        const cif = button.getAttribute('data-cif');
        const telefono = button.getAttribute('data-telefono');
        const facturacion = button.getAttribute('data-facturacion') === '1';

        // Rellenar los campos del formulario en el modal
        modalCliente.querySelector('#cliente_id').value = clienteId || '';
        modalCliente.querySelector('#nombre_cliente').value = nombre || '';
        modalCliente.querySelector('#email_cliente').value = email || '';
        modalCliente.querySelector('#cif').value = cif || '';
        modalCliente.querySelector('#telefono').value = telefono || '';
        
    });
});
</script>

<?php require 'inc/_global/views/footer_end.php'; ?>