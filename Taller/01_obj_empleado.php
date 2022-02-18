<?php
require_once("01_class_empleado.php");
$objEmpleado = new Empleado("danna astaiza",3232434454, "Coordinadora",4100000);
print_r('<pre>');
print_r($objEmpleado->getDatos());
//calling Setters
$objEmpleado->setNombre("Eliana Contreras");
$objEmpleado->setCelular("3124567899");
//callling Getters
echo "Cargo: ".$objEmpleado->getCargo().("<br>");
echo "Celular: ".$objEmpleado->getCelular();

print_r('<pre>');
print_r($objEmpleado);
print_r('<pre>');
print_r($objEmpleado->getDtosEmpleado());

$objEmpleado->PagoRetencion();


?>