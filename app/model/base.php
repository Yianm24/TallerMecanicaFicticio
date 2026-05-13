<?php

namespace App\Model;
use App\Config\Conexion;
//require "app/config/conex.php";
abstract class Base extends Conexion
{
    protected $id;
    protected $estado;
    protected $conexion;

    public function __construct()
    {
        parent::__construct();
        
        $this->conexion = $this->getConnection();
    }


}
