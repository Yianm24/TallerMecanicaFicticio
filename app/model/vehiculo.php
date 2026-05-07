<?php
require "base.php";
class Vehiculo extends Base
{
    private $placa;
    private $marca;
    private $modelo;
    private $ano;
    private $detalles;

    public function __construct($placa = null, $marca = null, $modelo = null, $ano = null, $detalles = null)
    {
        parent::__construct();
        if ($placa !== null) {
            $this->placa = $placa;
        }

        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->detalles = $detalles;
        $this->estado = 1; // Asignar un valor predeterminado a estado, por ejemplo, 1 para activo
    }

    public function getAllVehiculos()
    {
        try {
            $consult = $this->getConnection()->prepare("SELECT * FROM vehiculo WHERE estado = 1");
            $consult->execute();
            return $consult->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            return []; // Retorna un array vacío en caso de error
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
            // Preparar la consulta SQL (INSERT INTO vehiculo)
            $query = "INSERT INTO vehiculo (placa,marca, modelo, ano, detalles,estado) VALUES (?,?, ?, ?, ?, ?)";

            // Utiliza getConnection() heredado de Conexion para preparar la consulta
            $stmt = $this->getConnection()->prepare($query);

            // Vincular los parámetros para evitar inyecciones SQL
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
            // Manejo de errores por ejemplo, si un id de cliente ya está duplicado
            return "<script>alert('Error al registrar el vehículo: " . $e->getMessage() . "');</script>";
        }
    }

    public function deleteVehiculo(string $placa)
    {
        $this->placa = $placa;

        return $this->deleteVehiculoByPlaca();
    }

    private function deleteVehiculoByPlaca()
    {
        try {
            // Preparar la consulta SQL
            $query = "UPDATE `vehiculo` SET estado = 0 WHERE placa = ?";
            $delete = $this->getConnection()->prepare($query);

            // Vincular el parámetro
            $delete->bindValue(1, $this->placa);
            // Ejecutar la consulta
            $delete->execute();

            return "Vehículo eliminado exitosamente";
        } catch (\PDOException $e) {
            return "Error al eliminar el vehículo: " . $e->getMessage();
        }
    }
}
