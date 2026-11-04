<?php

namespace App\Controller;

use App\Model\Cliente;

$solicitud = $_POST['TipoSolicitud'] ?? '';

$cliente = new Cliente();

switch ($solicitud) {
    case 'guardar':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            if (!empty($_POST['cedula']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['telefono']) && !empty($_POST['direccion'])) {

                $result = $cliente->addCliente($_POST['cedula'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['direccion']);

                echo "<script>alert('Datos registrados correctamente');</script>";
            } else {
                echo "<script>alert('vacio');</script>";
            }
        }
        break;



        case 'editar':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            if (!empty($_POST['cedula']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['telefono']) && !empty($_POST['direccion'])) {

                $result = $cliente->updateCliente($_POST['cod-cliente'],$_POST['cedula'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['direccion']);

                echo "<script>alert('Datos modificados correctamente');</script>";
            } else {
                echo "<script>alert('vacio');</script>";
            }
        }
        break;

}

$registros = $cliente->getAllClientes();

// Lógica para obtener los datos del cliente a editar
$edit_data = null;

include "app/view/clientes.php";
