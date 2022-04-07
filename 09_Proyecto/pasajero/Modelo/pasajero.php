<?php 
    require_once("../../conexion/conexion.php");
    session_start();
    class Usuario extends Conexion{

        public function __construct()
        {
            $this->db = parent::__construct();
        }

        public function insertarUsuario($nombres, $apellidos, $cedula, $email, $telefono,  $password, $certificadoAgricultor, $tipoRol){
            $tabla = $this->db->prepare("INSERT INTO usuario(nombres, apellidos, cedula, email, telefono, password, certificadoAgricultor, tipousuario_id, )
            VALUES(:nombres, :apellidos, :cedula, :email, :telefono, :password, :certificadoAgricultor :tipousuario_id");
            $tabla->bindParam(':nombres', $nombres);
            $tabla->bindParam(':apellidos', $apellidos);
            $tabla->bindParam(':cedula', $cedula);
            $tabla->bindParam(':email', $email);
            $tabla->bindParam(':telefono', $telefono);
            $tabla->bindParam(':password', $password);
            $tabla->bindParam(':certificadoAgricultor', $certificadoAgricultor);
            $tabla->bindParam(':tipousuario_id', $tipoRol);

            if ($tabla->execute()) {
                header('Location: ../Vista/index.php');
            }else{
                header('Location:../Vista/add.php');
            }
        }

        public function getUsuario(){
            $rows = null;
            $tabla = $this->db->prepare("SELECT id_usuario, nombres, apellidos, cedula FROM usuario");
            $tabla->execute();
            while ($result = $tabla->fetch()) {
                $rows[] = $result;
            }
            return $rows;
        }

        public function login($email, $password){
            $tabla = $this->db->prepare("SELECT nombres, email, password FROM usuario
            WHERE email = :email AND password = :password ");

            $tabla->bindParam(':email', $email);
            $tabla->bindParam(':password', $password);
            $tabla->execute();
            //rowCount metodo me encuentra al menos 1 registro
            if ($tabla->rowCount()==1) {
                //$ingresoUsuario traera los datos de tabla
                $ingresoUsuario = $tabla->fetch();
                $_SESSION['email'] = $ingresoUsuario["email"];
                $_SESSION["nombres"] = $ingresoUsuario["nombres"];
                //echo $_SESSION['email'];
                //die();
                echo "Ingreso de sesion Satisfactorio!!";
            }else{
                echo "Fallo al ingresar a sesión de usuario";
            }

        }//end login
         public function validarsesionUsuario(){
            if ($_SESSION['email']==Null) {
               header('Location: ../../index.php');
            }
        } 

       public function getnombreUsuario(){
            return $_SESSION['nombres'];
        } 
        public function getemailUsuario(){
            return $_SESSION['email'];
        }

        public function salirUsuario(){
            
            //session_start();
            unset($_SESSION["email"]);
            session_destroy();
            header('refresh:3 url=../../index.php');
            //header("refresh:3; url=../");
            echo "Terminando ...";
        
        }

    }//end clase

?>