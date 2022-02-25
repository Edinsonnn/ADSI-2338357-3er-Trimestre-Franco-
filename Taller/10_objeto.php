<?php
require_once("10_clase_deportivo.php");
$objDeportivo = new Deportivos("Camisa Deportiva", "L","Nike", 24);
print_r($objDeportivo->getVerInventario());


?>