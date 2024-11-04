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
    $tipo_palet = $_POST['tipo_palet'] ?? '';
    $numero_serie = $_POST['numero_serie'] ?? '';
    $numero_ciclos = $_POST['numero_ciclos'] ?? '';
    $estado = $_POST['estado'] ?? 'disponible';

    if (isset($_POST['palet_id']) && !empty($_POST['palet_id'])) {
        // Modificar palet existente
        $palet_id = (int)$_POST['palet_id'];
        $resultado = modificarPalet($palet_id, $tipo_palet,  $estado, $numero_ciclos);
        echo "<div class='alert alert-info'>{$resultado}</div>";
    } else {
        // Agregar nuevo palet
        $resultado = agregarPalet($tipo_palet, $numero_ciclos, 0, $estado, 1); // '1' es el stock inicial
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

<?php 

// Captura de parámetros de filtro
$tipo_palet = isset($_GET['tipo_palet']) ? $_GET['tipo_palet'] : null;
$estado = isset($_GET['estado']) ? $_GET['estado'] : null;
$fecha_inicio = isset($_GET['fecha_inicio']) ? $_GET['fecha_inicio'] : null;
$fecha_fin = isset($_GET['fecha_fin']) ? $_GET['fecha_fin'] : null;

$palets = obtenerPalets($tipo_palet, $estado, $fecha_inicio, $fecha_fin);

?>

<!-- Page Content -->
<div class="content">
 
<!-- Filtros de Búsqueda -->

  <div class="block block-rounded">
    <div class="block-content block-content-full overflow-x-auto">

    <div class="py-3 text-center">
        <h1 class="h3 fw-extrabold mb-1">Palets</h1>
        
      </div>

      <form action="palets.php" method="GET" class="row g-3">
        <!-- Filtro por Tipo de Palet -->
        <div class="col-md-3">
          <label for="tipo_palet" class="form-label">Tipo de Palet</label>
          <select id="tipo_palet" name="tipo_palet" class="form-select">
            <option value="">Todos</option>
            <option value="Americano" <?php echo (isset($_GET['tipo_palet']) && $_GET['tipo_palet'] == 'Americano') ? 'selected' : ''; ?>>Americano</option>
            <option value="Europeo" <?php echo (isset($_GET['tipo_palet']) && $_GET['tipo_palet'] == 'Europeo') ? 'selected' : ''; ?>>Europeo</option>
            <option value="Otro" <?php echo (isset($_GET['tipo_palet']) && $_GET['tipo_palet'] == 'Otro') ? 'selected' : ''; ?>>Otro</option>
          </select>
        </div>

        <!-- Filtro por Estado -->
        <div class="col-md-3">
          <label for="estado" class="form-label">Estado</label>
          <select id="estado" name="estado" class="form-select">
            <option value="">Todos</option>
            <option value="disponible" <?php echo (isset($_GET['estado']) && $_GET['estado'] == 'disponible') ? 'selected' : ''; ?>>Disponible</option>
            <option value="en_transito" <?php echo (isset($_GET['estado']) && $_GET['estado'] == 'en_transito') ? 'selected' : ''; ?>>En Tránsito</option>
            <option value="en_descontaminacion" <?php echo (isset($_GET['estado']) && $_GET['estado'] == 'en_descontaminacion') ? 'selected' : ''; ?>>En Descontaminación</option>
            <option value="reservado" <?php echo (isset($_GET['estado']) && $_GET['estado'] == 'reservado') ? 'selected' : ''; ?>>Reservado</option>
            <option value="vencido" <?php echo (isset($_GET['estado']) && $_GET['estado'] == 'vencido') ? 'selected' : ''; ?>>Vencido</option>
          </select>
        </div>

        <!-- Filtro por Rango de Fecha de Construcción -->
        <div class="col-md-3">
          <label for="fecha_inicio" class="form-label">Fecha de Construcción (Desde)</label>
          <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control" value="<?php echo isset($_GET['fecha_inicio']) ? htmlspecialchars($_GET['fecha_inicio']) : ''; ?>">
        </div>
        <div class="col-md-3">
          <label for="fecha_fin" class="form-label">Fecha de Construcción (Hasta)</label>
          <input type="date" id="fecha_fin" name="fecha_fin" class="form-control" value="<?php echo isset($_GET['fecha_fin']) ? htmlspecialchars($_GET['fecha_fin']) : ''; ?>">
        </div>

        <!-- Botón de Búsqueda -->
        <div class="col-md-12 text-end">
          <button type="submit" class="btn btn-primary">Buscar</button>
          <a href="palets.php" class="btn btn-secondary">Limpiar Filtros</a>
        </div>
      </form>
    </div>
  </div>

<!-- END Filtros de Búsqueda -->
  <!-- Dynamic Table Full -->
<div class="block block-rounded">
  <div class="block-header block-header-default">
    <h3 class="block-title">
      <div class="col-md-6 col-xl-3">
        <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modalPalet">
          <i class="fa fa-plus opacity-50 me-1"></i> Agregar Palet
        </button>
      </div>
    </h3>
  </div>
  <div class="block-content block-content-full overflow-x-auto">
    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
      <thead>
          <tr>
              <th class="text-center">#</th>
              <th class="text-center">Tipo de Palet</th>
              <th class="text-center">Color</th>
              <th class="text-center">Número de Serie</th>
              <th class="text-center">Fecha de Construcción</th>
              <th class="text-center">Ciclos Restantes</th>
              <th class="text-center">Estado</th>
              <th class="text-center">Veces en Circulación</th>
              <th class="text-center">Acción</th>
          </tr>
      </thead>
      <tbody>
          <?php if (!empty($palets)): ?>
              <?php foreach ($palets as $palet): ?>
                  <tr>
                      <td class="text-center"><?php echo htmlspecialchars($palet['id']); ?></td>
                      <td class="text-center"><?php echo htmlspecialchars($palet['tipo_palet']); ?></td>
                      <td class="text-center">
                          <span class="badge bg-info">
                              <?php echo htmlspecialchars(ucfirst($palet['color'])); ?>
                          </span>
                      </td>
                      <td class="text-center"><?php echo htmlspecialchars($palet['numero_serie']); ?></td>
                      <td class="text-center"><?php echo htmlspecialchars($palet['fecha_construccion']); ?></td>
                      <td class="text-center"><?php echo htmlspecialchars($palet['numero_ciclos']); ?></td>
                      <td class="text-center">
                          <span class="badge bg-<?php echo $palet['estado'] === 'disponible' ? 'success' : 'warning'; ?>">
                              <?php echo htmlspecialchars(ucfirst($palet['estado'])); ?>
                          </span>
                      </td>
                      <td class="text-center"><?php echo htmlspecialchars($palet['veces_en_circulacion']); ?></td>
                      <td class="text-center">
                           <!-- Botón de Asignación de Cliente -->
                          <?php if (!$palet['cliente_id']): // Solo mostrar el botón si el palet no está asignado ?>
                              <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalAsignarCliente"
                                      data-id="<?php echo htmlspecialchars($palet['id']); ?>">
                                  <i class="fa fa-user-plus"></i>
                              </button>
                          <?php endif; ?>

                          <!-- Botón de Historial de Movimientos -->
                          <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modalHistorial"
                                  data-id="<?php echo htmlspecialchars($palet['id']); ?>">
                              <i class="fa fa-history"></i> 
                          </button>
                          
                          <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#modalPalet"
                                  data-id="<?php echo htmlspecialchars($palet['id']); ?>"
                                  data-tipo_palet="<?php echo htmlspecialchars($palet['tipo_palet']); ?>"
                                  data-numero_serie="<?php echo htmlspecialchars($palet['numero_serie']); ?>"
                                    data-color="<?php echo htmlspecialchars($palet['color']); ?>"
                                  data-fecha_construccion="<?php echo htmlspecialchars($palet['fecha_construccion']); ?>"
                                  data-numero_ciclos="<?php echo htmlspecialchars($palet['numero_ciclos']); ?>"
                                  data-estado="<?php echo htmlspecialchars($palet['estado']); ?>"
                                  data-veces_en_circulacion="<?php echo htmlspecialchars($palet['veces_en_circulacion']); ?>">
                              <i class="fa fa-pencil-alt"></i>
                          </button>
                          <a href="palets.php?delete_id=<?php echo $palet['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este palet?');">
                              <i class="fa fa-trash"></i>
                          </a>
                      </td>
                  </tr>
              <?php endforeach; ?>
              <?php else: ?>
               
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
                
                <input type="hidden" id="numero_serie" name="numero_serie">

                <!-- Campo para Tipo de Palet -->
                <div class="mb-4">
                  <label class="form-label" for="tipo_palet">Tipo de Palet</label>
                  <select class="form-control" id="tipo_palet" name="tipo_palet" required>
                    <option value="Americano">Americano</option>
                    <option value="Europeo">Europeo</option>
                    <option value="Otro">Otro</option>
                  </select>
                </div>

                  <!-- Campo para Tipo de Palet -->
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

              

                <!-- Campo para Número de Ciclos -->
                <div class="mb-4">
                  <label class="form-label" for="numero_ciclos">Número de Ciclos</label>
                  <input type="number" class="form-control" id="numero_ciclos" name="numero_ciclos" placeholder="Número de Ciclos" required>
                </div>

                <!-- Campo para Estado -->
                <div class="mb-4">
                  <label class="form-label" for="estado">Estado</label>
                  <select class="form-control" id="estado" name="estado" required>
                    <option value="disponible">Disponible</option>
                    <option value="en_transito">En Tránsito</option>
                    <option value="en_descontaminacion">En Descontaminación</option>
                    <option value="reservado">Reservado</option>
                    <option value="vencido">Vencido</option>
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

<!-- Modal para Asignar Palet a un Cliente -->
<div class="modal fade" id="modalAsignarCliente" tabindex="-1" role="dialog" aria-labelledby="modalAsignarClienteLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAsignarClienteLabel">Asignar Palet a Cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
        $clientes = obtenerClientesParaPalets();
      ?>
        <form id="formAsignarCliente">
          <input type="hidden" id="palet_id" name="palet_id">
          <div class="mb-3">
            <label for="cliente_id" class="form-label">Seleccionar Cliente</label>
            <select id="cliente_id" name="cliente_id" class="form-select" required>
              <!-- Opciones de clientes cargadas dinámicamente por AJAX -->
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Asignar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal para Ver el Historial del Palet -->
<div class="modal fade" id="modalHistorial" tabindex="-1" role="dialog" aria-labelledby="modalHistorialLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalHistorialLabel">Historial de Palet</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Pestañas para el historial -->
        <ul class="nav nav-tabs" id="historialTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="asignaciones-tab" data-bs-toggle="tab" href="#asignaciones" role="tab">Asignaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="movimientos-tab" data-bs-toggle="tab" href="#movimientos" role="tab">Movimientos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="descontaminaciones-tab" data-bs-toggle="tab" href="#descontaminaciones" role="tab">Descontaminaciones</a>
          </li>
        </ul>
        <!-- Contenido de cada pestaña -->
        <div class="tab-content mt-3" id="historialTabContent">
          <div class="tab-pane fade show active" id="asignaciones" role="tabpanel">
            <!-- Contenido de asignaciones cargado por AJAX -->
          </div>
          <div class="tab-pane fade" id="movimientos" role="tabpanel">
            <!-- Contenido de movimientos cargado por AJAX -->
          </div>
          <div class="tab-pane fade" id="descontaminaciones" role="tabpanel">
            <!-- Contenido de descontaminaciones cargado por AJAX -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


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
        //const nfcIdentifier = button.getAttribute('data-nfc_identifier');
        const tipoPalet = button.getAttribute('data-tipo_palet');
        const numeroSerie = button.getAttribute('data-numero_serie');
        const estado = button.getAttribute('data-estado');
        const numeroCiclos = button.getAttribute('data-numero_ciclos');

        modalPalet.querySelector('#palet_id').value = paletId || '';
        //modalPalet.querySelector('#nfc_identifier').value = nfcIdentifier || '';
        modalPalet.querySelector('#tipo_palet').value = tipoPalet || '';
        modalPalet.querySelector('#numero_serie').value = numeroSerie || '';
        modalPalet.querySelector('#estado').value = estado || '';
        modalPalet.querySelector('#numero_ciclos').value = numeroCiclos || '';
    });
});

</script>
<script>
// Obtener lista de clientes para asignar
$.ajax({
    url: 'inc/backend/api_get.php?action=obtener_clientes',
    method: 'GET',
    success: function(response) {
        // Manejar los datos de clientes en el modal
    }
});

// Asignar un cliente a un palet
$('#formAsignarCliente').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        url: 'api_get.php?action=asignar_cliente',
        method: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            alert(response.success || response.error);
            $('#modalAsignarCliente').modal('hide');
            location.reload();
        }
    });
});

// Obtener historial del palet
function obtenerHistorial(palet_id, tipo) {
    $.ajax({
        url: 'api_get.php',
        method: 'GET',
        data: { action: 'obtener_historial', palet_id: palet_id, tipo: tipo },
        success: function(response) {
            // Actualizar el contenido del historial en el modal
        }
    });
}


</script>


<?php require 'inc/_global/views/footer_end.php'; ?>
