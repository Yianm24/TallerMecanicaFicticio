<?php

// $dataBase = mysqli_connect("localhost", "root", "", "tallermecanicoficticio");
// if (!$dataBase) {
//     die("Error de conexión: " . mysqli_connect_error());
// }else {
//     echo "Conexión exitosa a la base de datos.";
// }

namespace app/config/conex.php;
abstract class Conexion{
public $host="localhost";
public $namedb="tallermecanicoficticio";
public $userdb="root";
public $passwd="";
private $conexion;

public function __construct() {
    $this->getConnection();
}

public function getConnection():PDO{
try {

$dsn="mysql:host=".$this->host.";dbname=".$this->namedb.";charset=utf8";
$this->conexion=new PDO($dsn,$this->userdb,$this->passwd);

 $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 echo "conexion a base de datos de manera exitosa";
} catch (PDOException $error) {
     die('No se pudo conectar a la base de datos, error:' . $error->getMessage());
}
return $this->conexion;
}

}
