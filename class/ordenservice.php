<?php
require_once 'base.php';
class OrdenServicio extends Base
{

    private $id_vehiculo;
    private $fecha;
    private $detallescompra;
    private $totalcompra;

    public function __construct($id, $id_vehiculo, $fecha, $detallescompra, $totalcompra)
    {
        parent::__construct($id);
        $this->id_vehiculo = $id_vehiculo;
        $this->fecha = $fecha;
        $this->detallescompra = $detallescompra;
        $this->totalcompra = $totalcompra;
    }

    public function mostrarDatos($opcion = null)
    {
        if ($opcion === null) {
            echo "ID: {$this->id}, id vehiculo: {$this->id_vehiculo}, fecha: {$this->fecha}, detallescompra: {$this->detallescompra}<br>";
        } else {
            switch ($opcion) {
                case 1:
                    echo $this->id;
                    break;
                case 2:
                    echo $this->id_vehiculo;
                    break;
                case 3:
                    echo $this->fecha;
                    break;
                case 4:
                    echo $this->detallescompra;
                    break;
            }
        }
    }
}
