<?php

include "app/model/cliente.php";

$cliente = new Cliente();

// Comprobamos si la petición es POST (cuando el usuario le da click a Enviar)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Usamos !empty para asegurar que los datos existen y no están en blanco
    if (!empty($_POST['id']) && !empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['apellido'])&& !empty($_POST['direccion'])) {
        
        $result = $cliente->addCliente($_POST['id'], $_POST['nombre'] , $_POST['apellido'], $_POST['telefono'], $_POST['direccion']);
        
        // Imprimir el resultado para que el navegador ejecute el <script>
        echo $result; 
    } else {
        echo "<script>alert('Falta uno o varios datos por ingresar');</script>";
    }
}

require_once __DIR__ . "/../view/clienteForm.php";
        