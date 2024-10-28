<?php 

/**
 * Obtiene todos los almacenes desde la base de datos.
 *
 * @return array Lista de almacenes.
 */
require 'inc/_global/database.php';

function obtenerAlmacenes()
{
    global $conexion;
    $query = "SELECT id, nombre, ubicacion FROM almacenes";
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Obtiene los datos de un almacén por su ID.
 *
 * @param int $almacen_id ID del almacén.
 * @return array|null Datos del almacén o null si no existe.
 */
function obtenerAlmacenPorId($almacen_id)
{
    global $conexion;
    $query = "SELECT id, nombre, ubicacion FROM almacenes WHERE id = :id LIMIT 1";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':id', $almacen_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

/**
 * Agrega un nuevo almacén a la base de datos.
 *
 * @param string $nombre Nombre del almacén.
 * @param string $ubicacion Ubicación del almacén.
 * @return string Mensaje de éxito o error.
 */
function agregarAlmacen($nombre, $ubicacion)
{
    global $conexion;

    try {
        $query = "INSERT INTO almacenes (nombre, ubicacion) VALUES (:nombre, :ubicacion)";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':ubicacion', $ubicacion);
        $stmt->execute();
        
        return 'Almacén agregado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al agregar el almacén: ' . $e->getMessage();
    }
}

/**
 * Modifica un almacén existente en la base de datos.
 *
 * @param int $almacen_id ID del almacén.
 * @param string $nombre Nombre del almacén.
 * @param string $ubicacion Ubicación del almacén.
 * @return string Mensaje de éxito o error.
 */
function modificarAlmacen($almacen_id, $nombre, $ubicacion)
{
    global $conexion;

    try {
        $query = "UPDATE almacenes 
                  SET nombre = :nombre, 
                      ubicacion = :ubicacion
                  WHERE id = :almacen_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':almacen_id', $almacen_id, PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':ubicacion', $ubicacion);
        $stmt->execute();
        
        return 'Almacén modificado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al modificar el almacén: ' . $e->getMessage();
    }
}

/**
 * Elimina un almacén de la base de datos.
 *
 * @param int $almacen_id ID del almacén.
 * @return string Mensaje de éxito o error.
 */
function borrarAlmacen($almacen_id)
{
    global $conexion;

    try {
        $query = "DELETE FROM almacenes WHERE id = :almacen_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':almacen_id', $almacen_id, PDO::PARAM_INT);
        $stmt->execute();
        
        return 'Almacén eliminado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al eliminar el almacén: ' . $e->getMessage();
    }
}


?>