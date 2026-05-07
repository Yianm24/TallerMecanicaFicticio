<?php

include "app/model/cliente.php";

$cliente = new Cliente();

// Comprobamos si la petición es POST (cuando el usuario le da click a Enviar)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Verificamos si la petición es para eliminar (action = delete)
    if (isset($_POST['action']) && $_POST['action'] === 'delete') {
        if (!empty($_POST['delete_id'])) {
            $result_delete = $cliente->deleteCliente($_POST['delete_id']);
            echo "<script>alert('Cliente eliminado correctamente');</script>";
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

include "app/view/clienteForm.php";
