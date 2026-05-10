<?php

namespace App\Controller;

use App\Model\User;

//include "app/model/vehiculo.php";

$usuario = new User();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Se cambia 'nombre' por 'username' para coincidir con el formulario de login.php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        
        // Evaluamos si el método authenticate() retorna true
        if ($usuario->authenticate($_POST['username'], $_POST['password'])) {
            
            // Asignamos variables de sesión para identificar al usuario
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['logged_in'] = true;
            
            echo "<script>alert('Usuario y contraseña correctos');</script>";
            die("<script>location='?url=dashboard'</script>");
        } else {
            echo "<script>alert('Usuario o contraseña incorrectos');</script>";
        }
        
    } else {
        echo "<script>alert('Falta uno o varios datos por ingresar');</script>";
    }
}

include "app/view/login.php";
