<?php

namespace App\Controller;

use App\Model\Vehiculo;

$solicitud = $_POST['TipoSolicitud'] ?? '';


$vehiculo = new Vehiculo();


switch ($solicitud) {
    case 'guardar':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            if (!empty($_POST['placa']) && !empty($_POST['marca']) && !empty($_POST['modelo']) && !empty($_POST['ano']) && !empty($_POST['detalles'])) {

                $result = $vehiculo->addVehiculo($_POST['placa'], $_POST['marca'], $_POST['modelo'], $_POST['ano'], $_POST['detalles']);

                echo "<script>alert('Datos registrados correctamente');</script>";
            } else {
                echo "<script>alert('vacio');</script>";
            }
        }
        break;


        case 'editar':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            if (!empty($_POST['placa']) && !empty($_POST['marca']) && !empty($_POST['modelo']) && !empty($_POST['ano']) && !empty($_POST['detalles'])) {

                $result = $vehiculo->updateVehiculo($_POST['cod-vehiculo'],$_POST['placa'], $_POST['marca'], $_POST['modelo'], $_POST['ano'], $_POST['detalles']);

                echo "<script>alert('Datos registrados correctamente');</script>";
            } else {
                echo "<script>alert('vacio');</script>";
            }
        }
        break;

}


$edit_data = null;

$registrosVehiculos = $vehiculo->getAllVehiculos();

include "app/view/vehiculos.php";
