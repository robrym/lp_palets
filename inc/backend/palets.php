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
    $query = "SELECT id, nfc_identifier, color, status FROM palets";
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
    $query = "SELECT id, nfc_identifier, color, status FROM palets WHERE id = :id LIMIT 1";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':id', $palet_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

/**
 * Agrega un nuevo palet a la base de datos.
 *
 * @param string $nfc_identifier Identificador NFC del palet.
 * @param string $color Color del palet.
 * @param string $status Estado del palet.
 * @return string Mensaje de éxito o error.
 */
function agregarPalet($nfc_identifier, $color, $status)
{
    global $conexion;

    try {
        $query = "INSERT INTO palets (nfc_identifier, color, status) VALUES (:nfc_identifier, :color, :status)";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':nfc_identifier', $nfc_identifier);
        $stmt->bindParam(':color', $color);
        $stmt->bindParam(':status', $status);
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
 * @param string $color Color del palet.
 * @param string $status Estado del palet.
 * @return string Mensaje de éxito o error.
 */
function modificarPalet($palet_id, $nfc_identifier, $color, $status)
{
    global $conexion;

    try {
        $query = "UPDATE palets 
                  SET nfc_identifier = :nfc_identifier, 
                      color = :color, 
                      status = :status
                  WHERE id = :palet_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':palet_id', $palet_id, PDO::PARAM_INT);
        $stmt->bindParam(':nfc_identifier', $nfc_identifier);
        $stmt->bindParam(':color', $color);
        $stmt->bindParam(':status', $status);
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


?>