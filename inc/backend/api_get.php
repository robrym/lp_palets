<?php
require 'inc/_global/database.php'; // Conexión a la base de datos

require 'funciones.php'; // Archivo de funciones


header('Content-Type: application/json'); // Tipo de contenido JSON para la respuesta

// Verificar que se haya pasado un parámetro 'action'
if (!isset($_GET['action'])) {
    echo json_encode(['error' => 'No action specified']);
    exit;
}

$action = $_GET['action'];

switch ($action) {
    case 'obtener_clientes':
        echo json_encode(obtenerClientes());
        break;

    case 'asignar_cliente':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $palet_id = $_POST['palet_id'] ?? null;
            $cliente_id = $_POST['cliente_id'] ?? null;
            echo json_encode(asignarCliente($palet_id, $cliente_id));
        } else {
            echo json_encode(['error' => 'Invalid request method']);
        }
        break;

    case 'obtener_historial':
        $palet_id = $_GET['palet_id'] ?? null;
        $tipo = $_GET['tipo'] ?? null;
        echo json_encode(obtenerHistorial($palet_id, $tipo));
        break;

    default:
        echo json_encode(['error' => 'Invalid action specified']);
        break;
}

