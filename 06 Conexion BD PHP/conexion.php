<?php
class Conexion{
protected $db;
private $drive     ="mysql";
private $host      ="localhost";
private $based     ="transporte";
private $usuario ="root";
private $contrasena="";

public function __construct()
{
    try{
        $db = new PDO("{$this->drive}:host={$this->host};dbname={$this->based}",
        $this->usuario, $this->contrasena);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
        echo "La coneccion fue exitosa";
      }catch (PDOException $e) {
   echo "Ha ocurrido un error al conectarse a la BD".$e->getMessage();

      }
}
}//

$conectarDb = new Conexion();
//print_r($conectarDb);
?>