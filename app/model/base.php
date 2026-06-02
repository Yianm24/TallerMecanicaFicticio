<?php

namespace App\Model;
use App\Config\Conexion;
abstract class Base extends Conexion
{
    protected $id;
    protected $estado;
    protected $conexion;

    public function __construct($id = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->conexion = $this->getConnection();

    }


}
