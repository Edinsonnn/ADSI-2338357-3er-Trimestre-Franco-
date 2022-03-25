<?php
require_once("../../conexion/conexionn.php");

class Pasajero extends Conexionn{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function insertarPasajero($nombre, $email, $telefono, $password){
        $table =$this->db->prepare("INSERT INTO pasajero(nombre, email, telefono, password) VALUES (:nombre, :email, :telefono, :password)");
        $table->bindParam(':nombre', $nombre);
        $table->bindParam(':email', $email);
        $table->bindParam(':telefono', $telefono);
        $table->bindParam(':password', $password);

        if($table->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/add.php');
        }
    }
}//end class
?>
