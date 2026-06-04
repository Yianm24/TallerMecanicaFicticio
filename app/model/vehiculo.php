<?php

namespace App\Model;

class Vehiculo extends Base
{
    
    private $placa;
    private $marca;
    private $modelo;
    private $ano;
    private $detalles;

    public function __construct($id = null, $placa = null, $marca = null, $modelo = null, $ano = null, $detalles = null)
    {
        
        parent::__construct();
        if ($id !== null) {
            $this->id = $id;
        }
        if ($placa !== null) {
            $this->placa = $placa;
        }

        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->detalles = $detalles;
        $this->estado = 1;
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


    public function addVehiculo($placa, $marca, $modelo, $ano, $detalles)
    {
        
        $this->placa = $placa;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->detalles = $detalles;

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
            $result = $stmt->execute();

            return $result;
        } catch (\PDOException $e) {
            return "<script>alert('Error al registrar el vehículo: " . $e->getMessage() . "');</script>";
        }
    }

    public function updateVehiculo($id, $placa, $marca, $modelo, $ano, $detalles)
    {
        $this->id = $id;
        $this->placa = $placa;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->detalles = $detalles;

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
            return "Error al actualizar el vehículo: " . $e->getMessage();
        }
    }

    public function deleteVehiculo(int $id)
    {
        $this->id = $id;

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
            return "Error al eliminar el vehículo: " . $e->getMessage();
        }
    }
}
