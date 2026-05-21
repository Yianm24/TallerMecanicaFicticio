<?php

namespace App\Controller;

use App\Model\Repuesto;

$repuesto = new Repuesto();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['action']) && $_POST['action'] === 'delete') {
        if (!empty($_POST['delete_id'])) {
            $result_delete = $repuesto->deleteRepuesto($_POST['delete_id']);
            echo "<script>alert('Repuesto eliminado correctamente');</script>";
        }
    } else {
        if (!empty($_POST['nombre']) && !empty($_POST['precio']) && !empty($_POST['stock'])) {

            $result = $repuesto->addRepuesto($_POST['nombre'], $_POST['precio'], $_POST['stock']);


            echo "<script>alert('Datos registrados correctamente');</script>";
        } else {
            echo "<script>alert('Falta uno o varios datos por ingresar');</script>";
        }
    }
}

$result = $repuesto->getAllRepuestos();

include "app/view/repuestos.php";
