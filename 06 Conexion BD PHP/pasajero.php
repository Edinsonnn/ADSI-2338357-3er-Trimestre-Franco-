<?php
require_once("conexion.php");
class Pasajero extends Conexion{

public function __construct()
{
    $this->db = parent::__construct();
}

public function insertarPasajeros($nombre, $email, $telefono){
    //preparar consulta con el SQL Inser INT
    $tabla = $this->db->prepare("INSERT INTO pasajero(nombre, email, telefono)
    VALUES(:nombre, :email, :telefono)");
    //bindParam pasa el dato del parametro a la variable especifica
    $tabla->bindParam(':nombre', $nombre);
    $tabla->bindParam(':email', $email);
    $tabla->bindParam(':telefono', $telefono);
    //ejecutar la sentencia
    $tabla->execute();
    //me permite verificar el ultimo reidtro insertado
    $idPasajero = $this->db->lastInsertId();
    return $idPasajero;

}

public function getPasajeros(){
    //Listar o mostrar pasasjeros
    $rows = null;
    //preparo el SQl de select
    $tabla = $this->db->prepare("SELECT idPasajero, nombre, email, telefono FROM pasajero");
    //ejecuto la secuencia SQL
    $tabla->execute();
    while ($resultado = $tabla->fetch()) {
        $rows[] = $resultado;
    }
    return $rows;
}


public function buscarPasajero($idBuscar){
    $buscar=$idBuscar;
    $tabla = $this->db->prepare("SELECT idPasajero, nombre, email, telefono FROM pasajero WHERE idPasajero=$buscar");
    $tabla->execute();
    return $tabla;
}

public function updatePasajero($idPasajero, $nombre, $email, $telefono){
//Preparar el SQL de la consulta
$tabla = $this->db->prepare("UPDATE pasajero SET nombre = :nombre, email = :email, telefono = :telefono 
                                WHERE idPasajero = $idPasajero");
   //bindParam pasa el dato del parametro a la variable especifica
   //$tabla->bindParam(':idPasajero', $idPasajero);
   $tabla->bindParam(':nombre', $nombre);
   $tabla->bindParam(':email', $email);
   $tabla->bindParam(':telefono', $telefono);
  
   //ejecutar la sentencia
   $tabla->execute();
   return $tabla;
}
public function deletePasajero($idPasajero){
    $tabla = $this->db->prepare("DELETE FROM pasajero WHERE idPasajero = :idPasajero");
    $tabla->bindParam(':idPasajero', $idPasajero);
    $tabla->execute();
    return $tabla;
}

}//End class


?>