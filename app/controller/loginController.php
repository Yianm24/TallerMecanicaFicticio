<?php

namespace App\Controller;

use App\Model\User;

$usuario = new User();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    
    if (isset($_POST['username']) && isset($_POST['password'])) {
        
        // Evaluamos si el método authenticate() retorna true
        $resultado = $usuario->getDatosUser($_POST['username'], $_POST['password']);
        //echo $resultado;
        if (is_array($resultado)) {
            
        
            // Asignamos variables de sesión para identificar al usuario
            $_SESSION = [
                'username' =>  $resultado['nombre'],
                'rol' =>  $resultado['rol'],
                'logged_in' => true
            ];
           
            
            echo "<script>alert('Usuario y contraseña correctos');</script>";
            header('Location: ?url=dashboard');
            exit();
        } else {
            echo $resultado;
        }
        
    } else {
        echo "<script>alert('Falta uno o varios datos por ingresar');</script>";
    }
}

include "app/view/login.php";
