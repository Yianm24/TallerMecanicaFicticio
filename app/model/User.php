<?php

namespace App\Model;

class User extends Base
{
    private $nombre;
    private $password;

    public function __construct()
    {
        parent::__construct();
    
    }

    public function getDatosUser($nombre = null, $password = null){
        $this->nombre = $nombre;
        $this->password = $password;

        return $this->authenticate();
    }

    
    private function authenticate()
    {
        try {
          
            $query = "SELECT * FROM user WHERE nombre = ? AND password = ?";
            
            $stmt = $this->conexion->prepare($query);
            
           
            $stmt->bindValue(1, $this->nombre);
            $stmt->bindValue(2, $this->password);
            
            $stmt->execute();
            $fila = $stmt->rowCount();
            
          
            $user = $stmt->fetch(\PDO::FETCH_ASSOC);
            
            return ($fila === 1) ? $user : '<script>alert("Usuario o contraseña incorrectos")</script>';
            
        } catch (\PDOException $e) {
            return '<script>alert("Error al autenticar usuario: '.$e->getMessage().'")</script>';
        }
    }
}