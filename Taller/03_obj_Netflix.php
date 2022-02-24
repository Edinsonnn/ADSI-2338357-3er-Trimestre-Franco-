<?php
require_once("03_Netflix_class.php");
$objNetflix = new Netflix("Batman", 2003, true, 01-05-2018);
echo "Titulo: ".$objNetflix->titulo;
echo "Año Creacion: ".$objNetflix->ancreacion;
?>