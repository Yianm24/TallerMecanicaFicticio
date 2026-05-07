<?php
namespace App\Model;
//require "base.php";
class Repuesto extends Base
{
    private $nombre;
    private $precio;
    private $stock;

    public function __construct( $nombre = null, $precio = null, $stock = null)
    {
        parent::__construct();
        
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->estado = 1;
    }

    public function getAllRepuestos()
    {
        try {
            $consult = $this->getConnection()->prepare("SELECT * FROM repuesto WHERE estado = 1");
            $consult->execute();
            return $consult->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            return []; // Retorna un array vacío en caso de error
        }
    }

    public function addRepuesto($nombre, $precio, $stock)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;

        return $this->registerRepuesto();
    }

    private function registerRepuesto()
    {
        try {
            // Preparar la consulta SQL (INSERT INTO repuesto)
            $query = "INSERT INTO repuesto (nombre, precio, stock, estado) VALUES (?, ?, ?, ?)";

            // Utiliza getConnection() heredado de Conexion para preparar la consulta
            $stmt = $this->getConnection()->prepare($query);

            // Vincular los parámetros para evitar inyecciones SQL
            
            $stmt->bindValue(1, $this->nombre);
            $stmt->bindValue(2, $this->precio);
            $stmt->bindValue(3, $this->stock);
            $stmt->bindValue(4, $this->estado);

            // Ejecutar la consulta
            $result = $stmt->execute();

            return $result;
        } catch (\PDOException $e) {
            // Manejo de errores por ejemplo, si un id de cliente ya está duplicado
            return "<script>alert('Error al registrar el repuesto: " . $e->getMessage() . "');</script>";
        }
    }


    public function deleteRepuesto(int $id)
    {
        $this->id = $id;

        return $this->deleteRepuestoById();
    }

    private function deleteRepuestoById()
    {
        try {
            // Preparar la consulta SQL
            $query = "UPDATE `repuesto` SET estado = 0 WHERE id = ?";
            $delete = $this->getConnection()->prepare($query);

            // Vincular el parámetro
            $delete->bindValue(1, $this->id);
            // Ejecutar la consulta
            $delete->execute();

            return "Repuesto eliminado exitosamente";
        } catch (\PDOException $e) {
            return "Error al eliminar el repuesto: " . $e->getMessage();
        }
    }
    // public function reducirstock($cantidad)
    // {
    //     if ($this->stock >= $cantidad) {
    //         $this->stock -= $cantidad;
    //         echo "Stock reducido. Nuevo stock: {$this->stock}<br>";
    //     }else {
    //         echo "No hay suficiente stock para reducir. Stock actual: {$this->stock}<br>";
    //     }
    // }

    // public function aumentarstock($cantidad)
    // {
    //     $this->stock += $cantidad;
    //     echo "Stock aumentado. Nuevo stock: {$this->stock}<br>";
    // }

}
