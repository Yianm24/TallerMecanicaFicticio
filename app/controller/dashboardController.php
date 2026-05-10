<?php

namespace App\Controller;

// Verificamos si existe la variable de sesión que lo identifica como logueado
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Si no hay sesión, se le deniega el acceso y vuelve al login
    die("<script>location='?url=login'</script>");
}

include "app/view/dashboard.php";