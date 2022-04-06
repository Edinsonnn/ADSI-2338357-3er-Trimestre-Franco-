<?php 
    require_once("../Modelo/pasajero.php");

    if (isset($_REQUEST["btn_enviar"])) {
        $modeloUsuario = new Usuario();
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $cedula = $_POST["cedula"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $password = $_POST["password"];
        $certificadoAgriculator = $_POST["certificadoAgricultor"];
        $tipoRol = $_POST["tipousuario_id"];

        $modeloUsuario->insertarUsuario($nombres, $apellidos, $cedula, $email, $telefono,  $password, $certificadoAgriculator, $tipoRol);

    }else{
        header('Location: ../Vista/add.php');
    }

?>