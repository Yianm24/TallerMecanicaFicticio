<?php

class Conex
{
    private $pdo;

    public function __construct()
    {
        $this->conectar();
    }

    public function conectar(){
        try {
            $dns = "mysql:host=localhos;dbname=taller";
            $this->pdo = new PDO($dns, "root", " " );

            echo "conexion exitosa";
        } catch (PDOException $e) {
            die("error en conexion" . $e->getMessage());
        }
    }

    public function get_PDO(){
        return $this->pdo;
    }

    public function cerrarConexion(){
        $this->pdo = null;
        echo 'Cerrar' ;
    }
}
