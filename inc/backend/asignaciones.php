<?php

/**
 * Obtiene todas las asignaciones de palets a clientes.
 *
 * @return array Lista de asignaciones.
 */
require 'inc/_global/database.php';

function obtenerAsignaciones()
{
    global $conexion;
    $query = "SELECT id, palet_id, cliente_id, fecha_asignacion, fecha_devolucion FROM asignaciones";
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Agrega una nueva asignación de palet a cliente.
 *
 * @param int $palet_id ID del palet.
 * @param int $cliente_id ID del cliente.
 * @return string Mensaje de éxito o error.
 */
function agregarAsignacion($palet_id, $cliente_id)
{
    global $conexion;

    try {
        $query = "INSERT INTO asignaciones (palet_id, cliente_id, fecha_asignacion) 
                  VALUES (:palet_id, :cliente_id, NOW())";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':palet_id', $palet_id, PDO::PARAM_INT);
        $stmt->bindParam(':cliente_id', $cliente_id, PDO::PARAM_INT);
        $stmt->execute();
        
        return 'Asignación realizada exitosamente.';
    } catch (PDOException $e) {
        return 'Error al realizar la asignación: ' . $e->getMessage();
    }
}

/**
 * Elimina una asignación de la base de datos.
 *
 * @param int $asignacion_id ID de la asignación.
 * @return string Mensaje de éxito o error.
 */
function borrarAsignacion($asignacion_id)
{
    global $conexion;

    try {
        $query = "DELETE FROM asignaciones WHERE id = :asignacion_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':asignacion_id', $asignacion_id, PDO::PARAM_INT);
        $stmt->execute();
        return 'Asignación eliminada exitosamente.';
    } catch (PDOException $e) {
        return 'Error al eliminar la asignación: ' . $e->getMessage();
    }

}
