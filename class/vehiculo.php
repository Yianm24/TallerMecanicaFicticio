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
    }