<?php
require_once("../../conexion/conexionn.php");

class Pasajero extends Conexionn
{

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
    public function getPasajero(){
        $rows = null;
        $table = $this->db->prepare("SELECT idPasajero, nombre, email, telefono FROM pasajero");
        $table->execute();
        while ($result = $table->fecth()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function login($email, $password){
        $rows = null;
        $table = $this->db->prepare("SELECT email, password FROM pasajero WHERE email = :email AND password = :password");

        $table->bindParam(':email', $email);
        $table->bindParam(':password', $password);
        $table->execute();
        //rowCount() metodo encuentra al menos 1 registro
        if ($table->rowCount()==1) {
            //$ingresoUsuario traera los datos de tabla
            $ingresoUsuario = $table->fecth();
            $_SESSION['email'] = $ingresoUsuario["email"];
            $_SESSION['nombre'] = $ingresoUsuario["nombre"];
            echo $_SESSION["email"];
            echo "Ingreso de Sesion Correcto!!";
        }else{
            echo "Fallo al Iniciar Session!";
        }
        return $ingresoUsuario;
       /* Cuando son mas roles
       if ($table->rowCount()==1) {

            while ($result = $table->fetch()) {
              $rows[] = $result;
            }
            return $rows;
        }else{
        echo "Inicio Sesion Fallo!";
           header('Location: ../Vista/login.php');
           header('refresh:3; url=../Vista/login.php');
       }*/
    }
    public function validarsesionPasajero(){
        if ($_SESSION['email']==Null) {
           header('Location: ../../index.php');
        }
    }
    public function getNombrePasajero(){
        return $_SESSION["email"];
    }

    public function salirPasajero(){
          //session_start();
          unset($_SESSION["email"]);
          session_destroy();
          header('refresh:3 url=../../index.php');
          //header("refresh:3; url=../");
          echo "Terminando ...";
    }


}//end class
?>
