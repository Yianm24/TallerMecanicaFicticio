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
        // Inicializa la conexión en la clase Base
        parent::__construct();

        if ($id !== null) {
            $this->id = $id;
        }
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->estado = 1; // Asignar un valor predeterminado a estado, por ejemplo, 1 para activo
    }

    public function getAllClientes()
    {
        try {
            $consult = $this->getConnection()->prepare("SELECT * FROM cliente WHERE estado = 1");
            $consult->execute();
            return $consult->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            return []; // Retorna un array vacío en caso de error
        }
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
            $query = "INSERT INTO cliente (id, nombre, apellido, telefono, direccion, estado) VALUES (?, ?, ?, ?, ?, ?)";

            // Utiliza getConnection() heredado de Conexion para preparar la consulta
            $stmt = $this->getConnection()->prepare($query);

            // Vincular los parámetros para evitar inyecciones SQL
            $stmt->bindValue(1, $this->id);
            $stmt->bindValue(2, $this->nombre);
            $stmt->bindValue(3, $this->apellido);
            $stmt->bindValue(4, $this->telefono);
            $stmt->bindValue(5, $this->direccion);
            $stmt->bindValue(6, $this->estado);

            // Ejecutar la consulta
            $result = $stmt->execute();

            return $result;
        } catch (\PDOException $e) {
            // Manejo de errores por ejemplo, si un id de cliente ya está duplicado
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
            // Preparar la consulta SQL
            $query = "UPDATE `cliente` SET estado = 0 WHERE id = ?";
            $delete = $this->getConnection()->prepare($query);

            // Vincular el parámetro
            $delete->bindValue(1, $this->id);
            // Ejecutar la consulta
            $delete->execute();

            return "Cliente eliminado exitosamente";
        } catch (\PDOException $e) {
            return "Error al eliminar el cliente: " . $e->getMessage();
        }
    }
}
