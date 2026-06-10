<?php

namespace App\Model;
//require "base.php";
class Repuesto extends Base
{
    private $nombre;
    private $precio;
    private $stock;
    private $marca;

    public function __construct($id = null, $nombre = null, $precio = null, $stock = null, $marca = null)
    {
        parent::__construct();
        if ($id !== null) {
            $this->id = $id;
        }
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->marca = $marca;
        $this->estado = 1;
    }

    public function getAllRepuestos()
    {
        try {
            $consult = $this->conexion->prepare("SELECT * FROM repuesto WHERE estado = 1");
            $consult->execute();
            return $consult->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            return [];
        }
    }

    public function addRepuesto($nombre, $marca, $precio, $stock)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->marca = $marca;

        return $this->registerRepuesto();
    }

    private function registerRepuesto()
    {
        try {
            $query = "INSERT INTO repuesto (nombre, marca, precio, stock, estado) VALUES (?, ?, ?, ?, ?)";

            $stmt = $this->conexion->prepare($query);

            $stmt->bindValue(1, $this->nombre);
            $stmt->bindValue(2, $this->marca);
            $stmt->bindValue(3, $this->precio);
            $stmt->bindValue(4, $this->stock);
            $stmt->bindValue(5, $this->estado);

            $result = $stmt->execute();

            return $result;
        } catch (\PDOException $e) {
            return "<script>alert('Error al registrar el repuesto: " . $e->getMessage() . "');</script>";
        }
    }

    public function updateRepuesto($id, $nombre, $marca, $precio, $stock)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->precio = $precio;
        $this->stock = $stock;
        
        

        return $this->updateRepuestoById();
    }

    private function updateRepuestoById()
    {
        try {
            $query = "UPDATE `repuesto` SET nombre = ?, marca = ?, precio = ?, stock = ? WHERE id = ?";
            $update = $this->conexion->prepare($query);


            $update->bindValue(1, $this->nombre);
            $update->bindValue(2, $this->marca);
            $update->bindValue(3, $this->precio);
            $update->bindValue(4, $this->stock);
            $update->bindValue(5, $this->id);

            $update->execute();

            return "Repuesto actualizado exitosamente";
        } catch (\PDOException $e) {
            return "Error al actualizar el repuesto: " . $e->getMessage();
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
            $query = "UPDATE `repuesto` SET estado = 0 WHERE id = ?";
            $delete = $this->conexion->prepare($query);

            $delete->bindValue(1, $this->id);
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
