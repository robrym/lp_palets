<?php
// Configuración de la base de datos
$host = 'localhost'; // Dirección del servidor de la base de datos
$dbname = 'gestion'; // Nombre de la base de datos
$username = 'root'; // Usuario de la base de datos
$password = ''; // Contraseña del usuario de la base de datos
 
try {
    // Crear una nueva instancia de PDO para la conexión
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Configurar PDO para que lance excepciones en caso de errores
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   
} catch (PDOException $e) {
    // Manejar el error en caso de que la conexión falle
    echo "Error en la conexión: " . $e->getMessage();
    exit;
}
?>