<?php

session_start();

include "conexion_be.php";

header('Content-Type: application/json');

// Leer los datos JSON de la solicitud
$input = json_decode(file_get_contents('php://input'), true);
$action = $input['action'];
$codigoSala = $input['codigoSala'];

// $action = "admin";
// $codigoSala = "A0117";

switch ($action) {
    case 'admin':
        getAdmin($conexion, $codigoSala);
        break;
    case 'verificar':
        $nombreAdmin = $_SESSION['usuario'];
        verificarAdmin($conexion, $nombreAdmin, $codigoSala);
        break;
    case 'obtenerUsuarios':
        obtenerUsuarios($conexion, $codigoSala);
        break;
    default:
        echo json_encode(['success' => false, 'error' => 'Invalid action']);
        break;
}


function getAdmin($conexion, $codigoSala)
{

    $nombreAdministrador = "";
    // Consultar la base de datos para obtener el nombre del administrador
    $sql = "SELECT administrador FROM salas WHERE codigo_sala = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('s', $codigoSala);
    $stmt->execute();
    $stmt->bind_result($nombreAdministrador);
    $stmt->fetch();

    if ($nombreAdministrador) {
        echo json_encode(['success' => true, 'nombreAdministrador' => $nombreAdministrador]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Room not found or administrator not set']);
    }

    $stmt->close();
}

function verificarAdmin($conexion, $nombreAdmin, $codigoSala)
{
    $nombreAdministrador = "";
    // Consultar la base de datos para verificar el nombre del administrador
    $sql = "SELECT administrador FROM salas WHERE codigo_sala = ?";
    $stmt = $conexion->prepare($sql);

    if ($stmt === false) {
        echo json_encode(['success' => false, 'error' => 'Prepare failed: ' . $conexion->error]);
        return;
    }

    $stmt->bind_param('s', $codigoSala);
    $stmt->execute();
    $stmt->bind_result($nombreAdministrador);
    $stmt->fetch();

    if ($nombreAdministrador) {
        $esAdmin = ($nombreAdministrador === $nombreAdmin);
        echo json_encode(['success' => true, 'esAdmin' => $esAdmin]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Room not found']);
    }

    $stmt->close();
}

function obtenerUsuarios($conexion, $codigoSala)
{
}


$conexion->close();
