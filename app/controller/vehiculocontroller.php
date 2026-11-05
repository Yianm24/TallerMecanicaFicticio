<?php

namespace App\Controller;

use App\Model\Vehiculo;

$solicitud = $_POST['TipoSolicitud'] ?? '';


$vehiculo = new Vehiculo();


switch ($solicitud) {
    case 'guardar':
        
        $result = $vehiculo->addVehiculo(['placa','marca','modelo','ano','detalles']);
        echo "<script>alert('{$result}');</script>";
    break;
    case 'editar':

        $result = $vehiculo->updateVehiculo(['cod-vehiculo','placa','marca','modelo','ano','detalles']);
        echo "<script>alert('{$result}');</script>";
    break;
    case 'eliminar':

        $result = $vehiculo->deleteVehiculo(['delete_id']);
        echo "<script>alert('{$result}');</script>";
    break;
}
$edit_data = null;

$registrosVehiculos = $vehiculo->getAllVehiculos();

include "app/view/vehiculos.php";