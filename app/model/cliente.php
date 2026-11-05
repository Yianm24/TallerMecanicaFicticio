<?php

namespace App\Model;

use App\Traits\ValidadorTrait;


class Cliente extends Base
{
    use ValidadorTrait;
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

    // public function addCliente($cedula, $nombre, $apellido, $telefono, $direccion)
    public function addCliente(array $campos)
    {


        $procesoTrait = $this->validarPost($campos);

        if (is_array($procesoTrait)) {
            $this->cedula = $procesoTrait['cedula'];
            $this->nombre = $procesoTrait['nombre'];
            $this->apellido = $procesoTrait['apellido'];
            $this->telefono = $procesoTrait['telefono'];
            $this->direccion = $procesoTrait['direccion'];
            $this->estado = 1;
        } else {
            return $procesoTrait;
        }


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

            $stmt->execute();

            return "Datos registrados correctamente";
        } catch (\PDOException $e) {
            return "Error al registrar el vehículo: {$e->getMessage()}";
        }
    }

    public function updateCliente(array $campos)
    {
        $procesoTrait = $this->validarPost($campos);

        if (is_array($procesoTrait)) {
            $this->cod_cliente = $procesoTrait['cod-cliente'];
            $this->cedula = $procesoTrait['cedula'];
            $this->nombre = $procesoTrait['nombre'];
            $this->apellido = $procesoTrait['apellido'];
            $this->telefono = $procesoTrait['telefono'];
            $this->direccion = $procesoTrait['direccion'];
        }
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
            return "Error al actualizar el vehículo: {$e->getMessage()}";
        }
    }

    public function deleteCliente(array $campos)
    {
        $procesoTrait = $this->validarPost($campos);

        if (is_array($procesoTrait)) {
            $this->cod_cliente = $procesoTrait['delete_id'];
        }

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
            return "Error al eliminar el vehículo: {$e->getMessage()}";
        }
    }
}
