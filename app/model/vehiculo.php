<?php

namespace App\Model;

use App\Traits\ValidadorTrait;

class Vehiculo extends Base
{
    use ValidadorTrait;
    private $placa;
    private $marca;
    private $modelo;
    private $ano;
    private $detalles;

    public function __construct()
    {

        parent::__construct();
    }

    public function getAllVehiculos()
    {
        try {
            $consult = $this->conexion->prepare("SELECT * FROM vehiculo WHERE estado = 1");
            $consult->execute();
            return $consult->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            return [];
        }
    }


    public function addVehiculo(array $campos)
    {
        $procesoTrait = $this->validarPost($campos);
        if (is_array($procesoTrait)) {
            $this->placa = $procesoTrait['placa'];
            $this->marca = $procesoTrait['marca'];
            $this->modelo = $procesoTrait['modelo'];
            $this->ano = $procesoTrait['ano'];
            $this->detalles = $procesoTrait['detalles'];
            $this->estado = 1;
        } else {
            return $procesoTrait;
        }
        return $this->registerVehiculo();
    }

    private function registerVehiculo()
    {
        try {

            $query = "INSERT INTO vehiculo (placa, marca, modelo, ano, detalles, estado) VALUES (?, ?, ?, ?, ?, ?)";

            $stmt = $this->conexion->prepare($query);

            $stmt->bindValue(1, $this->placa);
            $stmt->bindValue(2, $this->marca);
            $stmt->bindValue(3, $this->modelo);
            $stmt->bindValue(4, $this->ano);
            $stmt->bindValue(5, $this->detalles);
            $stmt->bindValue(6, $this->estado);

            // Ejecutar la consulta
            $stmt->execute();

            return "Datos registrados correctamente";
        } catch (\PDOException $e) {
            return "Error al registrar el vehículo: {$e->getMessage()}";
        }
    }

    public function updateVehiculo(array $campos)
    {
        $procesoTrait = $this->validarPost($campos);
        if (is_array($procesoTrait)) {
            $this->id = $procesoTrait['cod-vehiculo'];
            $this->placa = $procesoTrait['placa'];
            $this->marca = $procesoTrait['marca'];
            $this->modelo = $procesoTrait['modelo'];
            $this->ano = $procesoTrait['ano'];
            $this->detalles = $procesoTrait['detalles'];
        } else {
            return $procesoTrait;
        }
        return $this->updateVehiculoById();
    }

    private function updateVehiculoById()
    {
        try {
            $query = "UPDATE `vehiculo` SET placa = ?, marca = ?, modelo = ?, ano = ?, detalles = ? WHERE cod_vehiculo = ?";
            $update = $this->conexion->prepare($query);


            $update->bindValue(1, $this->placa);
            $update->bindValue(2, $this->marca);
            $update->bindValue(3, $this->modelo);
            $update->bindValue(4, $this->ano);
            $update->bindValue(5, $this->detalles);
            $update->bindValue(6, $this->id);

            $update->execute();

            return "Vehículo actualizado exitosamente";
        } catch (\PDOException $e) {
            return "Error al actualizar el vehículo: {$e->getMessage()}";
        }
    }

    public function deleteVehiculo(array $campos)
    {
        $procesoTrait = $this->validarPost($campos);
        if (is_array($procesoTrait)) {
            $this->id = $procesoTrait['delete_id'];
        } else {
            return $procesoTrait;
        }
        return $this->deleteVehiculoById();
    }

    private function deleteVehiculoById()
    {
        try {
            // Preparar la consulta SQL
            $query = "UPDATE `vehiculo` SET estado = 0 WHERE cod_vehiculo = ?";
            $delete = $this->conexion->prepare($query);

            // Vincular el parámetro
            $delete->bindValue(1, $this->id);
            // Ejecutar la consulta
            $delete->execute();

            return "Vehículo eliminado exitosamente";
        } catch (\PDOException $e) {
            return "Error al eliminar el vehículo: {$e->getMessage()}";
        }
    }
}
