<?php

namespace App\Model;

class Cliente extends Base
{
    private $cod_cliente;
    private $cedula;
    private $nombre;
    private $telefono;
    private $direccion;
    private $apellido;

    public function __construct()
    {
        parent::__construct();

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

    public function addCliente($cedula, $nombre, $apellido, $telefono, $direccion)
    {
        
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->estado = 1;

        return $this->registerCliente();
    }

    private function registerCliente()
    {
        try {
            $query = "INSERT INTO cliente (cedula, nombre, apellido, telefono, direccion, estado) VALUES (?, ?, ?, ?, ?, ?)";

            $stmt = $this->conexion->prepare($query);

            $stmt->bindValue(1, $this->cedula);
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

    public function updateCliente($cod_cliente, $cedula, $nombre, $apellido, $telefono, $direccion)
    {
        $this->cod_cliente = $cod_cliente;
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->direccion = $direccion;

        return $this->updateClienteById();
    }

    private function updateClienteById()
    {
        try {
            $query = "UPDATE `cliente` SET cedula = ?, nombre = ?, apellido = ?, telefono = ?, direccion = ? WHERE cod_cliente = ?";
            $update = $this->conexion->prepare($query);

            $update->bindValue(1, $this->cedula);
            $update->bindValue(2, $this->nombre);
            $update->bindValue(3, $this->apellido);
            $update->bindValue(4, $this->telefono);
            $update->bindValue(5, $this->direccion);
            $update->bindValue(6, $this->cod_cliente);

            $update->execute();

            return "Cliente actualizado exitosamente";
        } catch (\PDOException $e) {
            return "Error al actualizar el cliente: " . $e->getMessage();
        }
    }

    public function deleteCliente(int $cod_cliente)
    {
        $this->cod_cliente = $cod_cliente;

        return $this->deleteClienteById();
    }

    private function deleteClienteById()
    {
        try {
            $query = "UPDATE `cliente` SET estado = 0 WHERE cod_cliente = ?";
            $delete = $this->conexion->prepare($query);

            $delete->bindValue(1, $this->cod_cliente);
            $delete->execute();

            return "Cliente eliminado exitosamente";
        } catch (\PDOException $e) {
            return "Error al eliminar el cliente: " . $e->getMessage();
        }
    }
}
