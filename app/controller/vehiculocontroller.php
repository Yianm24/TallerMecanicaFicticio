<?php

namespace App\Controller;
use App\Model\Vehiculo;


$vehiculo = new Vehiculo();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['action']) && $_POST['action'] === 'delete') {
        if (!empty($_POST['delete_id'])) {
            $result_delete = $vehiculo->deleteVehiculo($_POST['delete_id']);
            echo "<script>alert('Vehículo eliminado correctamente');</script>";
        }
    }elseif (isset($_POST['action']) && $_POST['action'] === 'update') {
        // Petición para actualizar un vehiculo
        if (!empty($_GET['edit_vehiculo']) && !empty($_POST['placa']) && !empty($_POST['marca']) && !empty($_POST['modelo']) && !empty($_POST['ano']) && !empty($_POST['detalles'])) {
            $result = $vehiculo->updateVehiculo($_GET['edit_vehiculo'], $_POST['placa'], $_POST['marca'], $_POST['modelo'], $_POST['ano'], $_POST['detalles']);
            echo "<script>alert('Vehículo actualizado correctamente'); location.href='?url=vehiculo';</script>";
        } else {
            echo "<script>alert('Falta uno o varios datos por ingresar para la actualización');</script>";
        }
    } else {

        if (!empty($_POST['placa']) && !empty($_POST['marca']) && !empty($_POST['modelo']) && !empty($_POST['ano']) && !empty($_POST['detalles'])) {

            $result = $vehiculo->addVehiculo($_POST['placa'], $_POST['marca'], $_POST['modelo'], $_POST['ano'], $_POST['detalles']);

            echo "<script>alert('Datos registrados correctamente');</script>";
        } else {
            echo "<script>alert('Falta uno o varios datos por ingresar');</script>";
        }
    }
}

$result = $vehiculo->getAllVehiculos();

$edit_data = null;
if (isset($_GET['edit_vehiculo'])) {
    foreach ($result as $c) {
        if ($c['cod_vehiculo'] == $_GET['edit_vehiculo']) {
            $edit_data = $c;
            break;
        }
    }
}


include "app/view/vehiculos.php";
