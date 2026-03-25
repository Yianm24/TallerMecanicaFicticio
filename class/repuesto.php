<?php
require_once "base.php";
class Repuesto extends Base
{
    private $nombre;
    private $precio;
    private $stock;

    public function __construct($id, $nombre, $precio, $stock)
    {
        parent::__construct($id);
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }


    public function reducirstock($cantidad)
    {
        if ($this->stock >= $cantidad) {
            $this->stock -= $cantidad;
            echo "Stock reducido. Nuevo stock: {$this->stock}<br>";
        }else {
            echo "No hay suficiente stock para reducir. Stock actual: {$this->stock}<br>";
        }
    }

    public function aumentarstock($cantidad)
    {
        $this->stock += $cantidad;
        echo "Stock aumentado. Nuevo stock: {$this->stock}<br>";
    }

     public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function actualizarDatosRepuesto($nombre, $precio, $stock)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    public function mostrarDatos($opcion = null)
    {
        if ($opcion === null) {
            echo "ID: {$this->id}, Nombre: {$this->nombre}, precio: {$this->precio}, stock: {$this->stock}<br>";
        } else {
            switch ($opcion) {
                case 'id':
                    echo $this->id;
                    break;
                case 'nombre':
                    echo $this->nombre;
                    break;
                case 'precio':
                    echo $this->precio;
                    break;
                case 'stock':
                    echo $this->stock;
                    break;
            }
        }
    }
}
