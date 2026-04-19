<?php
//require_once "class/conex.php";
require_once "app/model/cliente.php";
require_once "app/model/repuesto.php";
require_once "app/model/vehiculo.php";

?>
  
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href='assets\bootstrap\bootstrap.min.css'>
  <link rel="stylesheet" href='assets\css\styles.css'>
  <title>TallerMecanico</title>

</head>
<body>
  <?php
  include 'app\view\header.php';
  ?>
  <h1>Taller Mecanico: Las Roscas C.A</h1>
  <?php
  require_once 'app\view\clienteForm.php';
  require_once 'app\view\repuestoForm.php';
  require_once 'app\view\Aumentar_StockForm.php';
  require_once 'app\view\vehiculoForm.php';
  ?>
</body>

</html>