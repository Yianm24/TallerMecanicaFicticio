<?php

require_once "app/config/conex.php";
//abstract class Base extends Conexion
abstract class Base extends Conexion
{
    protected $id;
    protected $estado;
    private $conexion;

    public function __construct()
    {
        parent::__construct();
        // $this->conexion = $this->getConnection();
    }


}
