<?php

namespace App\Controller;

use App\Model\Cliente;

$solicitud = $_POST['TipoSolicitud'] ?? '';

$cliente = new Cliente();

switch ($solicitud) {
    case 'guardar':

        $result = $cliente->addCliente(['cedula', 'nombre', 'apellido', 'telefono', 'direccion']);
        echo "<script>alert('{$result}');</script>";
        break;

    case 'editar':

        $result = $cliente->updateCliente(['cod-cliente', 'cedula', 'nombre', 'apellido', 'telefono', 'direccion']);

        echo "<script>alert('{$result}');</script>";
        break;

    case 'eliminar':
        $result = $cliente->deleteCliente(['delete_id']);
        echo "<script>alert('{$result}');</script>";
        break;
}

$registros = $cliente->getAllClientes();

// Lógica para obtener los datos del cliente a editar
$edit_data = null;

include "app/view/clientes.php";
