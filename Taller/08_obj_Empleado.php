<?php
require_once("08_claseEmpleado.php");

$objEmpleado = new Empleado(1200000, "Omar Romero", 29);
print_r($objEmpleado->getPersona());
$objEmpleado->setestado("Inactivo");
echo ("<br>");
echo "Nuevo Estado: ".$objEmpleado->getestado();



?>