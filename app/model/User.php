<?php

namespace App\Model;

class User extends Base
{
    private $nombre;
    private $password;

    public function __construct($nombre = null, $password = null)
    {
        parent::__construct();
        
        $this->nombre = $nombre;
        $this->password = $password;
    }

    /**
     * Verifica las credenciales del usuario contra la base de datos
     */
    public function authenticate($nombre, $password)
    {
        try {
            // Consulta SQL buscando coincidencias para el nombre y el password.
            $query = "SELECT * FROM user WHERE nombre = ? AND password = ?";
            
            $stmt = $this->getConnection()->prepare($query);
            
            // Vinculamos los valores recibidos para evitar inyección SQL
            $stmt->bindValue(1, $nombre);
            $stmt->bindValue(2, $password);
            
            $stmt->execute();
            
            // Obtenemos el registro. Si existe coincidencia, fetch() devolverá el array, sino false.
            $user = $stmt->fetch(\PDO::FETCH_ASSOC);
            
            return $user ? true : false;
            
        } catch (\PDOException $e) {
            return false;
        }
    }
}