<?php
    require_once("../Modelo/pasajero.php");
    $modeloUsuario = new Usuario();
    $cerrarsesionUsuario =$modeloUsuario->salirUsuario();
?>