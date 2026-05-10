<?php

namespace App\Controller;

echo "<script>alert('Sesión cerrada correctamente');</script>";
// Vaciamos todas las variables de sesión
$_SESSION = array();

// Destruimos la sesión actual
session_destroy();

// Redirigimos al usuario a la página de login
die("<script>location='?url=login'</script>");