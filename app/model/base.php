<?php

require_once 'app\config\conex.php';
abstract class Base extends Conexion
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }


    abstract public function mostrarDatos();
}
