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
    }elseif (isset($_POST['action']) && $_POST['action'] === 'update') {
        // Petición para actualizar un repuesto
        if (!empty($_GET['edit_repuesto']) && !empty($_POST['nombre']) && !empty($_POST['marca']) && !empty($_POST['precio']) && !empty($_POST['stock'])) {
            $result = $repuesto->updateRepuesto($_GET['edit_repuesto'], $_POST['nombre'], $_POST['marca'], $_POST['precio'], $_POST['stock']);
            echo "<script>alert('Repuesto actualizado correctamente'); location.href='?url=repuesto';</script>";
        } else {
            echo "<script>alert('Falta uno o varios datos por ingresar para la actualización');</script>";
        }
    } 
    else {
        if (!empty($_POST['nombre']) && !empty($_POST['marca']) && !empty($_POST['precio']) && !empty($_POST['stock']) ) {

            $result = $repuesto->addRepuesto($_POST['nombre'], $_POST['marca'], $_POST['precio'], $_POST['stock']);


            echo "<script>alert('Datos registrados correctamente');</script>";
        } else {
            echo "<script>alert('Falta uno o varios datos por ingresar');</script>";
        }
    }
}

$result = $repuesto->getAllRepuestos();

$edit_data = null;
if (isset($_GET['edit_repuesto'])) {
    foreach ($result as $c) {
        if ($c['id'] == $_GET['edit_repuesto']) {
            $edit_data = $c;
            break;
        }
    }
}
include "app/view/repuestos.php";
