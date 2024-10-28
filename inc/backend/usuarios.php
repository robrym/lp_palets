<?php

/**
 * Obtiene todos los usuarios desde la base de datos.
 *
 * @return array Lista de usuarios.
 */
require 'inc/_global/database.php';

function obtenerUsuarios()
{
    global $conexion;
    $query = "SELECT id, nombre, email, nivel_permiso, estado FROM usuarios";
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Obtiene los datos de un usuario por su ID.
 *
 * @param int $usuario_id ID del usuario.
 * @return array|null Datos del usuario o null si no existe.
 */
function obtenerUsuarioPorId($usuario_id)
{
    global $conexion;
    $query = "SELECT id, nombre, email, nivel_permiso, estado FROM usuarios WHERE id = :id LIMIT 1";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':id', $usuario_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

/**
 * Agrega un nuevo usuario a la base de datos.
 *
 * @param string $nombre Nombre del usuario.
 * @param string $email Email del usuario.
 * @param string $password Contraseña del usuario.
 * @param string $nivel_permiso Nivel de permisos del usuario.
 * @return string Mensaje de éxito o error.
 */
function agregarUsuario($nombre, $email, $password, $nivel_permiso)
{
    global $conexion;

    try {
        // Encriptar la contraseña antes de guardarla
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO usuarios (nombre, email, password, nivel_permiso) 
                  VALUES (:nombre, :email, :password, :nivel_permiso)";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password_hash);
        $stmt->bindParam(':nivel_permiso', $nivel_permiso);
  
        $stmt->execute();
        
        return 'Usuario agregado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al agregar el usuario: ' . $e->getMessage();
    }
}

/**
 * Modifica un usuario existente en la base de datos.
 *
 * @param int $usuario_id ID del usuario.
 * @param string $nombre Nombre del usuario.
 * @param string $email Email del usuario.
 * @param string $nivel_permiso Nivel de permisos del usuario.
 * @param string|null $password Nueva contraseña del usuario, o null si no se cambia.
 * @return string Mensaje de éxito o error.
 */
function modificarUsuario($usuario_id, $nombre, $email, $nivel_permiso, $password = null)
{
    global $conexion;

    try {
        if ($password) {
            // Encriptar la nueva contraseña si se proporciona
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            $query = "UPDATE usuarios 
                      SET nombre = :nombre, 
                          email = :email, 
                          nivel_permiso = :nivel_permiso,
                          password = :password
                      WHERE id = :usuario_id";
            $stmt = $conexion->prepare($query);
            $stmt->bindParam(':password', $password_hash);
        } else {
            // Actualizar sin modificar la contraseña
            $query = "UPDATE usuarios 
                      SET nombre = :nombre, 
                          email = :email, 
                          nivel_permiso = :nivel_permiso
                      WHERE id = :usuario_id";
            $stmt = $conexion->prepare($query);
        }

        $stmt->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':nivel_permiso', $nivel_permiso);
     
        $stmt->execute();
        
        return 'Usuario modificado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al modificar el usuario: ' . $e->getMessage();
    }
}

/**
 * Elimina un usuario de la base de datos.
 *
 * @param int $usuario_id ID del usuario.
 * @return string Mensaje de éxito o error.
 */
function borrarUsuario($usuario_id)
{
    global $conexion;

    try {
        $query = "DELETE FROM usuarios WHERE id = :usuario_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
        $stmt->execute();
        
        return 'Usuario eliminado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al eliminar el usuario: ' . $e->getMessage();
    }
}



?>
