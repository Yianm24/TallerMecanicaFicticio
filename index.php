<?php
  //require_once "class/conex.php";
  require_once "class/cliente.php";
  require_once "class/repuesto.php";
  require_once "class/vehiculo.php";
 
?>

<!DOCTYPE html>
<html lang="es">
  <?php 
    include 'view/head.php';
    include 'view/header.php';
  ?>
  <body>
    <?php 
      require_once "view/clienteForm.php";
      require_once "view/repuestoForm.php";
      require_once "view/vehiculoForm.php";
    ?>
  </body>
</html>
