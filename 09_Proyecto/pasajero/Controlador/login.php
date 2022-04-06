<?php 
    require_once("../Modelo/pasajero.php");
    
    if (isset($_REQUEST["btn_enviar"])) {
        $email      = $_POST["email"];
        $password   = $_POST["password"];
        $modeloUsuario = new Usuario();
        $modeloUsuario->login($email, $password);

        /*  echo $loginPasajero;
        die();  */

        if (isset($modeloUsuario)) {
            header('Location: ../Vista/perfil.php');
        }else{
            header('Location: ../../Index.php');
        }

    }
?>