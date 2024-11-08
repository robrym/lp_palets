<?php 

require 'inc/_global/database.php';

/**
 * Obtiene todos los palets desde la base de datos.
 *
 * @return array Lista de palets.
 */

 function obtenerPalets($tipo_palet = null, $estado = null, $fecha_inicio = null, $fecha_fin = null)
 {
     global $conexion;
     $query = "
         SELECT p.*, cp.cliente_id
         FROM palets p
         LEFT JOIN clientes_palets cp ON p.id = cp.palet_id AND cp.fecha_fin IS NULL
         WHERE 1=1
     ";
 
     // Agregar condiciones según los filtros
     if ($tipo_palet) {
         $query .= " AND p.tipo_palet = :tipo_palet";
     }
     if ($estado) {
         $query .= " AND p.estado = :estado";
     }
     if ($fecha_inicio && $fecha_fin) {
         $query .= " AND p.fecha_construccion BETWEEN :fecha_inicio AND :fecha_fin";
     } elseif ($fecha_inicio) {
         $query .= " AND p.fecha_construccion >= :fecha_inicio";
     } elseif ($fecha_fin) {
         $query .= " AND p.fecha_construccion <= :fecha_fin";
     }
 
     $stmt = $conexion->prepare($query);
 
     // Asignación de parámetros
     if ($tipo_palet) {
         $stmt->bindParam(':tipo_palet', $tipo_palet);
     }
     if ($estado) {
         $stmt->bindParam(':estado', $estado);
     }
     if ($fecha_inicio) {
         $stmt->bindParam(':fecha_inicio', $fecha_inicio);
     }
     if ($fecha_fin) {
         $stmt->bindParam(':fecha_fin', $fecha_fin);
     }
 
     $stmt->execute();
     return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }



/**
 * Obtiene los datos de un palet por su ID.
 *
 * @param int $palet_id ID del palet.
 * @return array|null Datos del palet o null si no existe.
 */
function obtenerPaletPorId($palet_id)
{
    global $conexion;
    $query = "SELECT * FROM palets WHERE id = :id LIMIT 1"; // Consulta con SELECT *
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':id', $palet_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

/**
 * Obtiene todos los clientes desde la base de datos.
 *
 * @return array Lista de clientes.
 */
function obtenerClientesParaPalets()
{
    global $conexion;
    $query = "SELECT id, nombre FROM clientes"; // Selecciona solo los campos necesarios
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Agrega un nuevo palet a la base de datos.
 *
 * @param string $tipo_palet Tipo de palet (ej.: Americano, Europeo).
 * @param int $numero_ciclos Número de ciclos asignados al palet.
 * @param int $veces_en_circulacion Contador de veces en circulación.
 * @param string $estado Estado del palet.
 * @param int $stock Stock del palet.
 * @return string Mensaje de éxito o error.
 */
function agregarPalet($tipo_palet, $numero_ciclos, $veces_en_circulacion, $estado, $stock)
{
    global $conexion;

    // Genera un número de serie único (identificador NFC)
    $numero_serie = uniqid('PAL-', true);

    try {
        $query = "INSERT INTO palets (nfc_identifier, tipo_palet, numero_serie, fecha_construccion, numero_ciclos, veces_en_circulacion, estado, stock)
        VALUES (:numero_serie, :tipo_palet, :numero_serie, NOW(), :numero_ciclos, :veces_en_circulacion, :estado, :stock)";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':numero_serie', $numero_serie); // Usamos el mismo valor para nfc_identifier y numero_serie
        $stmt->bindParam(':tipo_palet', $tipo_palet);
        $stmt->bindParam(':numero_ciclos', $numero_ciclos, PDO::PARAM_INT);
        $stmt->bindParam(':veces_en_circulacion', $veces_en_circulacion, PDO::PARAM_INT);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':stock', $stock, PDO::PARAM_INT);
        $stmt->execute();
        
        return 'Palet agregado exitosamente con número de serie: ' . $numero_serie;
    } catch (PDOException $e) {
        return 'Error al agregar el palet: ' . $e->getMessage();
    }
}


/**
 * Modifica un palet existente en la base de datos.
 *
 * @param int $palet_id ID del palet.

 * @param string $tipo_palet Tipo de palet.

 * @param string $estado Estado del palet.
 * @param int $numero_ciclos Número de ciclos asignados.
 * @return string Mensaje de éxito o error.
 */
function modificarPalet($palet_id, $tipo_palet, $estado, $numero_ciclos)
{
    global $conexion;

    try {
        $query = "UPDATE palets 
                  SET 
                      tipo_palet = :tipo_palet, 
                   
                      estado = :estado,
                      numero_ciclos = :numero_ciclos
                  WHERE id = :palet_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':palet_id', $palet_id, PDO::PARAM_INT);
       
        $stmt->bindParam(':tipo_palet', $tipo_palet);
       
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':numero_ciclos', $numero_ciclos, PDO::PARAM_INT);
        $stmt->execute();
        
        return 'Palet modificado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al modificar el palet: ' . $e->getMessage();
    }
}

/**
 * Elimina un palet de la base de datos.
 *
 * @param int $palet_id ID del palet.
 * @return string Mensaje de éxito o error.
 */
function borrarPalet($palet_id)
{
    global $conexion;

    try {
        $query = "DELETE FROM palets WHERE id = :palet_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':palet_id', $palet_id, PDO::PARAM_INT);
        $stmt->execute();
        
        return 'Palet eliminado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al eliminar el palet: ' . $e->getMessage();
    }
}

/**
 * Actualiza el estado y los atributos de un palet.
 *
 * @param int $palet_id ID del palet.
 * @param int $numero_ciclos Número de ciclos restantes.
 * @param int $veces_en_circulacion Número de veces en circulación.
 * @param string $estado Nuevo estado del palet.
 * @return string Mensaje de éxito o error.
 */
function actualizarPalet($palet_id, $numero_ciclos, $veces_en_circulacion, $estado)
{
    global $conexion;

    try {
        $query = "UPDATE palets SET numero_ciclos = :numero_ciclos, veces_en_circulacion = :veces_en_circulacion, estado = :estado WHERE id = :palet_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':palet_id', $palet_id, PDO::PARAM_INT);
        $stmt->bindParam(':numero_ciclos', $numero_ciclos, PDO::PARAM_INT);
        $stmt->bindParam(':veces_en_circulacion', $veces_en_circulacion, PDO::PARAM_INT);
        $stmt->bindParam(':estado', $estado);
        $stmt->execute();
        
        return 'Palet actualizado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al actualizar el palet: ' . $e->getMessage();
    }
}

/**
 * Registra un proceso de descontaminación para un palet.
 *
 * @param int $palet_id ID del palet.
 * @param int $operario_id ID del operario que realiza la descontaminación.
 * @param string $numero_registro Número de registro del proceso de descontaminación.
 * @param string $estado_recepcion Estado de recepción del palet.
 * @param string $condicion Condición del palet.
 * @param string $carga_asociada Tipo de carga asociada.
 * @param string|null $certificado_url URL del certificado de descontaminación, si existe.
 * @return string Mensaje de éxito o error.
 */
function registrarDescontaminacion($palet_id, $operario_id, $numero_registro, $estado_recepcion, $condicion, $carga_asociada, $certificado_url = null)
{
    global $conexion;

    try {
        $query = "INSERT INTO descontaminacion (palet_id, operario_id, numero_registro, fecha_entrada, estado_recepcion, condicion, carga_asociada, certificado_url)
                  VALUES (:palet_id, :operario_id, :numero_registro, NOW(), :estado_recepcion, :condicion, :carga_asociada, :certificado_url)";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':palet_id', $palet_id, PDO::PARAM_INT);
        $stmt->bindParam(':operario_id', $operario_id, PDO::PARAM_INT);
        $stmt->bindParam(':numero_registro', $numero_registro);
        $stmt->bindParam(':estado_recepcion', $estado_recepcion);
        $stmt->bindParam(':condicion', $condicion);
        $stmt->bindParam(':carga_asociada', $carga_asociada);
        $stmt->bindParam(':certificado_url', $certificado_url);
        $stmt->execute();
        
        return 'Descontaminación registrada exitosamente.';
    } catch (PDOException $e) {
        return 'Error al registrar la descontaminación: ' . $e->getMessage();
    }
}

/**
 * Finaliza el proceso de descontaminación actualizando la fecha de salida.
 *
 * @param int $descontaminacion_id ID del registro de descontaminación.
 * @return string Mensaje de éxito o error.
 */
function finalizarDescontaminacion($descontaminacion_id)
{
    global $conexion;

    try {
        $query = "UPDATE descontaminacion SET fecha_salida = NOW() WHERE id = :descontaminacion_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':descontaminacion_id', $descontaminacion_id, PDO::PARAM_INT);
        $stmt->execute();
        
        return 'Proceso de descontaminación finalizado.';
    } catch (PDOException $e) {
        return 'Error al finalizar la descontaminación: ' . $e->getMessage();
    }
}

?>
