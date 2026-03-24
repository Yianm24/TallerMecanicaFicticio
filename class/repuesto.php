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

    public function mostrarDatos($opcion = null)
    {
        if ($opcion === null) {
            echo "ID: {$this->id}, Nombre: {$this->nombre}, precio: {$this->precio}, stock: {$this->stock}<br>";
        } else {
            switch ($opcion) {
                case 1:
                    echo $this->id;
                    break;
                case 2:
                    echo $this->nombre;
                    break;
                case 3:
                    echo $this->precio;
                    break;
                case 4:
                    echo $this->stock;
                    break;
            }
        }
    }
}
