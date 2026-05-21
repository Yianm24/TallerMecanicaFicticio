<?php

namespace App\Controller;

use App\Model\Cliente;

$cliente = new Cliente();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['action']) && $_POST['action'] === 'delete') {
        if (!empty($_POST['delete_id'])) {
            $result_delete = $cliente->deleteCliente($_POST['delete_id']);
            echo "<script>alert('Cliente eliminado correctamente');</script>";
        }
    } elseif (isset($_POST['action']) && $_POST['action'] === 'update') {
        // Petición para actualizar un cliente
        if (!empty($_POST['id']) && !empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['apellido']) && !empty($_POST['direccion'])) {
            $result = $cliente->updateCliente($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['direccion']);
            echo "<script>alert('Cliente actualizado correctamente'); location.href='?url=clientes';</script>";
        } else {
            echo "<script>alert('Falta uno o varios datos por ingresar para la actualización');</script>";
        }
    } else {
        // Petición para registrar un cliente
        if (!empty($_POST['id']) && !empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['apellido']) && !empty($_POST['direccion'])) {
            $result = $cliente->addCliente($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['direccion']);
            echo "<script>alert('Datos registrados correctamente');</script>";
        } else {
            echo "<script>alert('Falta uno o varios datos por ingresar');</script>";
        }
    }
}
$result = $cliente->getAllClientes();

// Lógica para obtener los datos del cliente a editar
$edit_data = null;
if (isset($_GET['edit_id'])) {
    foreach ($result as $c) {
        if ($c['id'] == $_GET['edit_id']) {
            $edit_data = $c;
            break;
        }
    }
}

include "app/view/clientes.php";
