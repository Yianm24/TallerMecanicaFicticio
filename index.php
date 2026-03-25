<?php
//require_once "class/conex.php";
require_once "class/cliente.php";
require_once "class/repuesto.php";
require_once "class/vehiculo.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="estilos/bootstrap.min.css">
  <!--<link rel="stylesheet" href="./css/style.css">-->
  <!--<link rel="stylesheet" href="./style.css">-->
  <!--<link rel="stylesheet" href="class/style.css">-->
  <link rel="stylesheet" href="estilos/stylesnoBootstrap.css">
  <title>TallerMecanico</title>

</head>

<body>
  <?php
  include 'view/header.php';
  ?>
  <h1>Taller Mecanico: Las Roscas C.A</h1>
  <?php
  require_once "view/clienteForm.php";
  require_once "view/repuestoForm.php";
  require_once "view/vehiculoForm.php";
  ?>
</body>

</html>