<?php 

/**
 * Obtiene todos los palets desde la base de datos.
 *
 * @return array Lista de palets.
 */
require 'inc/_global/database.php';

function obtenerPalets()
{
    global $conexion;
    $query = "SELECT id, nfc_identifier, tipo_palet, numero_serie, fecha_construccion, numero_ciclos, veces_en_circulacion, estado, stock FROM palets";
    $stmt = $conexion->prepare($query);
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
    $query = "SELECT * FROM palets WHERE id = :id LIMIT 1";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':id', $palet_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

/**
 * Agrega un nuevo palet a la base de datos.
 *
 * @param string $nfc_identifier Identificador NFC del palet.
 * @param string $tipo_palet Tipo de palet (ej.: Americano, Europeo).
 * @param string $numero_serie Número de serie único del palet.
 * @param int $numero_ciclos Número de ciclos asignados al palet.
 * @param int $veces_en_circulacion Contador de veces en circulación.
 * @param string $estado Estado del palet.
 * @param int $stock Stock del palet.
 * @return string Mensaje de éxito o error.
 */
function agregarPalet($nfc_identifier, $tipo_palet, $numero_serie, $numero_ciclos, $veces_en_circulacion, $estado, $stock)
{
    global $conexion;

    try {
        $query = "INSERT INTO palets (nfc_identifier, tipo_palet, numero_serie, fecha_construccion, numero_ciclos, veces_en_circulacion, estado, stock)
                  VALUES (:nfc_identifier, :tipo_palet, :numero_serie, NOW(), :numero_ciclos, :veces_en_circulacion, :estado, :stock)";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':nfc_identifier', $nfc_identifier);
        $stmt->bindParam(':tipo_palet', $tipo_palet);
        $stmt->bindParam(':numero_serie', $numero_serie);
        $stmt->bindParam(':numero_ciclos', $numero_ciclos, PDO::PARAM_INT);
        $stmt->bindParam(':veces_en_circulacion', $veces_en_circulacion, PDO::PARAM_INT);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':stock', $stock, PDO::PARAM_INT);
        $stmt->execute();
        
        return 'Palet agregado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al agregar el palet: ' . $e->getMessage();
    }
}

/**
 * Modifica un palet existente en la base de datos.
 *
 * @param int $palet_id ID del palet.
 * @param string $nfc_identifier Identificador NFC del palet.
 * @param string $tipo_palet Tipo de palet.
 * @param string $numero_serie Número de serie del palet.
 * @param string $estado Estado del palet.
 * @param int $stock Stock del palet.
 * @return string Mensaje de éxito o error.
 */
function modificarPalet($palet_id, $nfc_identifier, $tipo_palet, $numero_serie, $estado, $stock)
{
    global $conexion;

    try {
        $query = "UPDATE palets 
                  SET nfc_identifier = :nfc_identifier, 
                      tipo_palet = :tipo_palet, 
                      numero_serie = :numero_serie,
                      estado = :estado,
                      stock = :stock
                  WHERE id = :palet_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':palet_id', $palet_id, PDO::PARAM_INT);
        $stmt->bindParam(':nfc_identifier', $nfc_identifier);
        $stmt->bindParam(':tipo_palet', $tipo_palet);
        $stmt->bindParam(':numero_serie', $numero_serie);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':stock', $stock, PDO::PARAM_INT);
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
 * @param string $condicion Condición del palet (ej.: bueno, daños menores).
 * @param string $carga_asociada Tipo de carga asociada (ej.: alimentos, productos químicos).
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