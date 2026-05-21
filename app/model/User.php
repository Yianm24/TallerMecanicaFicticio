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

    
    public function authenticate($nombre, $password)
    {
        try {
          
            $query = "SELECT * FROM user WHERE nombre = ? AND password = ?";
            
            $stmt = $this->conexion->prepare($query);
            
           
            $stmt->bindValue(1, $nombre);
            $stmt->bindValue(2, $password);
            
            $stmt->execute();
            
          
            $user = $stmt->fetch(\PDO::FETCH_ASSOC);
            
            return $user ? true : false;
            
        } catch (\PDOException $e) {
            return false;
        }
    }
}