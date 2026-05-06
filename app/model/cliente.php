<?php

require_once "base.php";

class Cliente extends Base
{
    private $nombre;
    private $telefono;
    private $direccion;
    private $apellido;


    public function __construct($id = null, $nombre = null, $apellido = null, $telefono = null, $direccion = null)
    {
        // Inicializa la conexión en la clase Base
        parent::__construct();
        
        if ($id !== null) {
            $this->id = $id;
        }
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }

    // Función pública para asignar datos y llamar al registro
    public function addCliente($id, $nombre, $apellido, $telefono, $direccion)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->direccion = $direccion;

        return $this->registerCliente();
    }

    // Función privada que ejecuta la consulta para ingresar datos a la tabla cliente
    private function registerCliente()
    {
        try {
            // Preparar la consulta SQL (INSERT INTO cliente)
            $query = "INSERT INTO cliente (id, nombre, apellido, telefono, direccion) VALUES (?, ?, ?, ?, ?)";
            
            // Utiliza getConnection() heredado de Conexion para preparar la consulta
            $stmt = $this->getConnection()->prepare($query);

            // Vincular los parámetros para evitar inyecciones SQL
            $stmt->bindValue(1, $this->id);
            $stmt->bindValue(2, $this->nombre);
            $stmt->bindValue(3, $this->apellido);
            $stmt->bindValue(4, $this->telefono);
            $stmt->bindValue(5, $this->direccion);
            
            // Ejecutar la consulta
            $result = $stmt->execute();
            
            if ($result) {
                return "<script>alert('Cliente registrado exitosamente');</script>";
            } else {
                return "<script>alert('Registro Inválido, Intente nuevamente');</script>";
            }
        } catch (\PDOException $e) {
            // Manejo de errores por ejemplo, si un id de cliente ya está duplicado
            return "<script>alert('Error al registrar el cliente: " . $e->getMessage() . "');</script>";
        }
    }
}
