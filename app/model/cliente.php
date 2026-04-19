<?php

require_once "base.php";


class Cliente extends Base
{

    private $nombre;
    private $telefono;
    private $direccion;
    

    public function __construct($id, $nombre, $telefono, $direccion)
    {
        $this->getConnection();
        parent::__construct($id);
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }

    
    public function actualizarDatosCliente($nombre, $telefono, $direccion)
    {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }

     

    public function mostrarDatos($opcion = null)
    {
        if ($opcion === null) {
            echo "ID: {$this->id}, Nombre: {$this->nombre}, Teléfono: {$this->telefono}, Dirección: {$this->direccion}<br>";
        } else {
            switch ($opcion) {
                case 1:
                    echo $this->id;
                    break;
                case 2:
                    echo $this->nombre;
                    break;
                case 3:
                    echo $this->telefono;
                    break;
                case 4:
                    echo $this->direccion;
                    break;
            }
        }
    }
    
    
   
}
