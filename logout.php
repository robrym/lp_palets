<?php
session_start();

// Destruir todas las variables de sesión
$_SESSION = [];

// Destruir la sesión en el servidor
session_destroy();

// Redirigir al usuario a la página de login
header('Location: login.php');
exit;
?>