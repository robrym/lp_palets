<?php

/**
 * Obtiene todos los clientes desde la base de datos.
 *
 * @return array Lista de clientes.
 */
require 'inc/_global/database.php';

function obtenerClientes()
{
    global $conexion;
    $query = "SELECT id, nombre, email, cif,telefono, estado FROM clientes";
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Obtiene los datos de un cliente por su ID.
 *
 * @param int $cliente_id ID del cliente.
 * @return array|null Datos del cliente o null si no existe.
 */
function obtenerClientePorId($cliente_id)
{
    global $conexion;
    $query = "SELECT id, nombre,  email, cif,telefono,estado FROM clientes WHERE id = :id LIMIT 1";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':id', $cliente_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

/**
 * Agrega un nuevo cliente a la base de datos.
 *
 * @param string $nombre Nombre del cliente.
 * @param string $email Email del cliente.
 * @param string $cif CIF del cliente.
 * @param string $telefono Teléfono del cliente.

 * @return string Mensaje de éxito o error.
 */
function agregarCliente($nombre, $email, $cif, $telefono)
{
    global $conexion;

    try {
        $query = "INSERT INTO clientes (nombre, email, cif, telefono) 
                  VALUES (:nombre, :email, :cif, :telefono)";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':cif', $cif);
        $stmt->bindParam(':telefono', $telefono);
 
  
        $stmt->execute();
        
        return 'Cliente agregado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al agregar el cliente: ' . $e->getMessage();
    }
}

/**
 * Modifica un cliente existente en la base de datos.
 *
 * @param int $cliente_id ID del cliente.
 * @param string $nombre Nombre del cliente.
 * @param string $email Email del cliente.
 * @param string $cif CIF del cliente.
 * @param string $telefono Teléfono del cliente.

 * @return string Mensaje de éxito o error.
 */
function modificarCliente($cliente_id, $nombre, $email, $cif, $telefono)
{
    global $conexion;

    try {
        $query = "UPDATE clientes 
                  SET nombre = :nombre, 
                      email = :email, 
                      cif = :cif, 
                      telefono = :telefono
                  WHERE id = :cliente_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':cliente_id', $cliente_id, PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':cif', $cif);
        $stmt->bindParam(':telefono', $telefono);
     
        $stmt->execute();
        
        return 'Cliente modificado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al modificar el cliente: ' . $e->getMessage();
    }
}

/**
 * Elimina un cliente de la base de datos.
 *
 * @param int $cliente_id ID del cliente.
 * @return string Mensaje de éxito o error.
 */
function borrarCliente($cliente_id)
{
    global $conexion;

    try {
        $query = "DELETE FROM clientes WHERE id = :cliente_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':cliente_id', $cliente_id, PDO::PARAM_INT);
        $stmt->execute();
        
        return 'Cliente eliminado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al eliminar el cliente: ' . $e->getMessage();
    }
}





?>
