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
    }