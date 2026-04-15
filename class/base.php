<?php

require_once "conex.php";
abstract class Base extends Conexion
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    abstract public function getId();
    
    abstract public function setId($id);

    abstract public function mostrarDatos();
}
