<?php
require_once("../../conexion/conexionn.php");

class Despachador extends Conexionn{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function insertarDespachador($nombres, $telefono, $horario, $email, $password){
        $table =$this->db->prepare("INSERT INTO despachador(nombres, telefono, horario, email, password) VALUES (:nombres, :telefono, :horario, :email,  :password)");
        $table->bindParam(':nombres', $nombres);
        $table->bindParam(':telefono', $telefono);
        $table->bindParam(':horario', $horario);
        $table->bindParam(':email', $email);
        $table->bindParam(':password', $password);

        if($table->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/add.php');
        }
    }
}//end class
?>