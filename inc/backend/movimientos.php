<?php

/**
 * Obtiene todos los movimientos de palets desde la base de datos.
 *
 * @return array Lista de movimientos.
 */
require 'inc/_global/database.php';

function obtenerMovimientos()
{
    global $conexion;
    $query = "SELECT id, palet_id, almacen_id, tipo_movimiento, fecha_movimiento FROM movimientos";
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Agrega un nuevo movimiento de palet a la base de datos.
 *
 * @param int $palet_id ID del palet.
 * @param int $almacen_id ID del almacén.
 * @param string $tipo_movimiento Tipo de movimiento (entrada/salida).
 * @return string Mensaje de éxito o error.
 */
function agregarMovimiento($palet_id, $almacen_id, $tipo_movimiento)
{
    global $conexion;

    try {
        $query = "INSERT INTO movimientos (palet_id, almacen_id, tipo_movimiento, fecha_movimiento) 
                  VALUES (:palet_id, :almacen_id, :tipo_movimiento, NOW())";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':palet_id', $palet_id, PDO::PARAM_INT);
        $stmt->bindParam(':almacen_id', $almacen_id, PDO::PARAM_INT);
        $stmt->bindParam(':tipo_movimiento', $tipo_movimiento);
        $stmt->execute();
        
        return 'Movimiento registrado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al registrar el movimiento: ' . $e->getMessage();
    }
}

/**
 * Elimina un movimiento de la base de datos.
 *
 * @param int $movimiento_id ID del movimiento.
 * @return string Mensaje de éxito o error.
 */
function borrarMovimiento($movimiento_id)
{
    global $conexion;

    try {
        $query = "DELETE FROM movimientos WHERE id = :movimiento_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':movimiento_id', $movimiento_id, PDO::PARAM_INT);
        $stmt->execute();
        
        return 'Movimiento eliminado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al eliminar el movimiento: ' . $e->getMessage();
    }
}


?>