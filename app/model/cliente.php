<?php

namespace App\Model;
//require "base.php";

class Cliente extends Base
{
    private $nombre;
    private $telefono;
    private $direccion;
    private $apellido;


    public function __construct($id = null, $nombre = null, $apellido = null, $telefono = null, $direccion = null)
    {
        parent::__construct();

        if ($id !== null) {
            $this->id = $id;
        }
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->estado = 1;
    }

    public function getAllClientes()
    {
        try {
            $consult = $this->conexion->prepare("SELECT * FROM cliente WHERE estado = 1");
            $consult->execute();
            return $consult->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            return [];
        }
    }

    public function addCliente($id, $nombre, $apellido, $telefono, $direccion)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->direccion = $direccion;

        return $this->registerCliente();
    }

    private function registerCliente()
    {
        try {
            $query = "INSERT INTO cliente (id, nombre, apellido, telefono, direccion, estado) VALUES (?, ?, ?, ?, ?, ?)";

            $stmt = $this->conexion->prepare($query);

            $stmt->bindValue(1, $this->id);
            $stmt->bindValue(2, $this->nombre);
            $stmt->bindValue(3, $this->apellido);
            $stmt->bindValue(4, $this->telefono);
            $stmt->bindValue(5, $this->direccion);
            $stmt->bindValue(6, $this->estado);

            $result = $stmt->execute();

            return $result;
        } catch (\PDOException $e) {
            return "<script>alert('Error al registrar el cliente: " . $e->getMessage() . "');</script>";
        }
    }


    public function deleteCliente(int $id)
    {
        $this->id = $id;

        return $this->deleteClienteById();
    }

    private function deleteClienteById()
    {
        try {
            $query = "UPDATE `cliente` SET estado = 0 WHERE id = ?";
            $delete = $this->conexion->prepare($query);

            $delete->bindValue(1, $this->id);
            $delete->execute();

            return "Cliente eliminado exitosamente";
        } catch (\PDOException $e) {
            return "Error al eliminar el cliente: " . $e->getMessage();
        }
    }
}
