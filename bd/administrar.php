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
    case 'obtener':
        obtenerUsuarios($conexion, $codigoSala);
        break;
    case 'eliminarUsuario':
        $usuario = $input['usuario'];
        eliminarUsuario($conexion, $usuario, $codigoSala);
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
    $sql = "SELECT usuario_nombre FROM estadisticas WHERE codigo_sala = ?";
    $stmt = $conexion->prepare($sql);

    if ($stmt === false) {
        echo json_encode(['success' => false, 'error' => 'Prepare failed: ' . $conexion->error]);
        return;
    }

    $stmt->bind_param('s', $codigoSala);
    $stmt->execute();
    $result = $stmt->get_result();

    $usuarios = [];
    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row['usuario_nombre'];
    }

    $stmt->close();

    echo json_encode(['success' => true, 'usuarios' => $usuarios]);
}

function eliminarUsuario($conexion, $usuario, $codigoSala)
{
    $sql1 = "DELETE FROM estadisticas WHERE usuario_nombre = ? AND codigo_sala = ?";
    $stmt1 = $conexion->prepare($sql1);

    if ($stmt1 === false) {
        echo json_encode(['success' => false, 'error' => 'Prepare failed (estadisticas): ' . $conexion->error]);
        return;
    }

    $stmt1->bind_param('ss', $usuario, $codigoSala);
    $stmt1->execute();

    // Eliminar de la tabla estadisticasbasicas
    $sql2 = "DELETE FROM estadisticasbasicas WHERE usuario_nombre = ? AND codigo_sala = ?";
    $stmt2 = $conexion->prepare($sql2);

    if ($stmt2 === false) {
        echo json_encode(['success' => false, 'error' => 'Prepare failed (estadisticasbasicas): ' . $conexion->error]);
        return;
    }

    $stmt2->bind_param('ss', $usuario, $codigoSala);
    $stmt2->execute();

    if ($stmt1->affected_rows > 0 && $stmt2->affected_rows > 0) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'User not found or unable to delete']);
    }

    $stmt1->close();
    $stmt2->close();
}


$conexion->close();
