<?php 




/**
 * Obtiene todos los clientes desde la base de datos.
 *
 * @return array Lista de clientes.
 */
function obtenerClientes()
{
    global $conexion;
    $query = "SELECT id, nombre FROM clientes"; 
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Asigna un palet a un cliente.
 *
 * @param int $palet_id ID del palet.
 * @param int $cliente_id ID del cliente.
 * @return array Mensaje de éxito o error.
 */
function asignarCliente($palet_id, $cliente_id)
{
    global $conexion;

    if (!$palet_id || !$cliente_id) {
        return ['error' => 'Palet ID y Cliente ID son requeridos'];
    }

    // Finalizar cualquier asignación previa
    $query = "UPDATE clientes_palets SET fecha_fin = NOW() WHERE palet_id = :palet_id AND fecha_fin IS NULL";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':palet_id', $palet_id, PDO::PARAM_INT);
    $stmt->execute();

    // Crear nueva asignación
    $query = "INSERT INTO clientes_palets (palet_id, cliente_id, fecha_inicio) VALUES (:palet_id, :cliente_id, NOW())";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':palet_id', $palet_id, PDO::PARAM_INT);
    $stmt->bindParam(':cliente_id', $cliente_id, PDO::PARAM_INT);
    
    try {
        $stmt->execute();
        return ['success' => 'Palet asignado exitosamente al cliente'];
    } catch (PDOException $e) {
        return ['error' => 'Error al asignar el palet: ' . $e->getMessage()];
    }
}

/**
 * Obtiene el historial de un palet.
 *
 * @param int $palet_id ID del palet.
 * @param string $tipo Tipo de historial ('asignaciones', 'movimientos', 'descontaminaciones').
 * @return array Historial solicitado o mensaje de error.
 */
function obtenerHistorial($palet_id, $tipo)
{
    global $conexion;

    if (!$palet_id) {
        return ['error' => 'Palet ID es requerido'];
    }

    switch ($tipo) {
        case 'asignaciones':
            $query = "SELECT cliente_id, fecha_inicio, fecha_fin FROM clientes_palets WHERE palet_id = :palet_id";
            break;
        case 'movimientos':
            $query = "SELECT * FROM movimientos WHERE palet_id = :palet_id";
            break;
        case 'descontaminaciones':
            $query = "SELECT * FROM descontaminacion WHERE palet_id = :palet_id";
            break;
        default:
            return ['error' => 'Tipo de historial inválido'];
    }

    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':palet_id', $palet_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


?>