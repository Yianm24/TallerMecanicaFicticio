<?php

//require_once 'app\config\conex.php';
//abstract class Base extends Conexion
abstract class Base
{
    protected $id;
    private $conexion;

    public function __construct()
    {
        //parent::__construct();
        //$this->conexion = $this->getConnection();
    }

    

    abstract public function mostrarDatos();
}
