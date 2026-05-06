<?php

include "app/model/vehiculo.php";

$vehiculo = new Vehiculo();

// Comprobamos si la petición es POST (cuando el usuario le da click a Enviar)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Usamos !empty para asegurar que los datos existen y no están en blanco
    if (!empty($_POST['placa']) && !empty($_POST['marca']) && !empty($_POST['modelo']) && !empty($_POST['ano']) && !empty($_POST['detalles'])) {
        
        $result = $vehiculo->addVehiculo($_POST['placa'], $_POST['marca'], $_POST['modelo'], $_POST['ano'], $_POST['detalles']);
        
        // Imprimir el resultado para que el navegador ejecute el <script>
        //echo $result;
        echo "<script>alert('Datos registrados correctamente');</script>"; 
    } else {
        echo "<script>alert('Falta uno o varios datos por ingresar');</script>";
    }
}

$result = $vehiculo->getAllVehiculos();
            
include "app/view/vehiculoForm.php";
        