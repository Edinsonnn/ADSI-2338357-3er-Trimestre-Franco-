<?php
require_once("conexion.php");
class Despachador extends Conexion{

public function __construct()
{
     $this->db = parent::__construct();
}

public function insertarDespachador($nombres, $telefono, $horario, $email, $pasword){
    //preparar consulta con SQL Insert Int
  $tabla = $this->db->prepare("INSERT TO despachador(nombres, telefono, horario, email, pasword)
  VALUES (:nombres, :telefono, :horario, :email, :pasword)");
  //bindParam pasa el dato del parametro a la variable especifica
    $tabla->bindParam(':nombres', $nombres);
    $tabla->bindParam(':telefono', $telefono);
    $tabla->bindParam(':horario', $horario);
    $tabla->bindParam(':email', $email);
    $tabla->bindParam(':pasword', $pasword);
    $tabla->execute();
    //me permite verificar el ultimo reidtro insertado
    $idDespachador = $this->db->lastInsertId();
    return $idDespachador; 
} 


public function getDespachador(){
            //Listar o mostrar Despachadores
        $rows = null;
      //preparo el SQl de select
        $tabla = $this->db->prepare("SELECT idDespachador, nombres, telefono,  email, pasword FROM despachador ");
         //ejecuto la secuencia SQL
        $tabla->execute();
        while ($resultado = $tabla->fetch()) {
             $rows[] = $resultado;
    }
    return $rows;
 }
public function updateDespachador($idDespachador, $nombres, $telefono, $email, $pasword){
//Preparar el SQL de la consulta
$tabla = $this->db->prepare("UPDATE desapachador SET nombres = :nombres, telefono = :telefono, email = :email, pasword = :pasword
                                WHERE idDespachador=$idDespachador");   
    $tabla->bindParam(':nombres', $nombres);
    $tabla->bindParam(':telefono', $telefono);
    $tabla->bindParam(':email', $email);
    $tabla->bindParam(':pasword', $pasword);   
    
     //ejecutar la sentencia
   $tabla->execute();
   return $tabla;
}
public function deleteDdespachador($idDespachador){
    $tabla = $this->db->prepare("DELETE FROM despachador WHERE idDespachador = :idDespachador");
    $tabla->bindParam(':idDespachador', $idDespachador);
    $tabla->execute();
    return $tabla;
}

}//end Class  
