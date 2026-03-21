<?php 
require_once "base.php";
 class Vehiculo extends Base
    {
        private $marca;
        private $modelo;
        private $ano;
        private $idCliente;
        private $placa;

        public function __construct($id, $marca, $modelo, $ano, $idCliente, $placa)
        {
            parent::__construct($id);
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->idCliente = $idCliente;
            $this->placa = $placa;
        }

         public function mostrarDatos($opcion = null)
        {
        if ($opcion === null) {
            echo "ID: {$this->id}, marca: {$this->marca}, modelo: {$this->modelo}, ano: {$this->ano}, placa: {$this->placa}<br>";
        } else {
            switch ($opcion) {
                case 1:
                    echo $this->id;
                    break;
                case 2:
                    echo $this->marca;
                    break;
                case 3:
                    echo $this->modelo;
                    break;
                case 4:
                    echo $this->ano;
                    break;
                case 5:
                    echo $this->placa;
                    break;
            }
        }
        }
    }