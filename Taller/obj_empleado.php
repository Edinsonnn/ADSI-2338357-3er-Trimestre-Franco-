<?php
require_once "01_class_empleado.php"
$objEmpleado = new Empleado(121324,"ergae", 34, 200000, 324243234, "jefe");
echo $objEmpleado->getCedula();


?>