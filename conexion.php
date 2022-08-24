<?php

class conexion {
    private $servidor="localhost";
    private $user="root";
    private $password="";
    private $conexion;

    



    public function _construct(){
        try {
            $this->conexion= new PDO("mysql:host=$this->servidor;dbname=album",$this->user,$this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch( PDOException $e){
            return "falla la conextion".$e;

        }
            

        
    }


   

 
}

?>