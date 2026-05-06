<?php

include "app/model/repuesto.php";

$repuesto = new Repuesto();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Usamos !empty para asegurar que los datos existen y no están en blanco
    if (!empty($_POST['nombre']) && !empty($_POST['precio']) && !empty($_POST['stock'])) {
        
        $result = $repuesto->addRepuesto($_POST['nombre'], $_POST['precio'], $_POST['stock']);
        
        // Imprimir el resultado para que el navegador ejecute el <script>
        //echo $result;
        echo "<script>alert('Datos registrados correctamente');</script>"; 
    } else {
        echo "<script>alert('Falta uno o varios datos por ingresar');</script>";
    }
}

$result = $repuesto->getAllRepuestos();

include "app/view/repuestoForm.php";