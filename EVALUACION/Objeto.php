<?php
require_once("02_Estudiante.php");
require_once("03_Profesor.php");
echo "Estudiante";
$objEstudiante = new Estudiante("Luis Agredo", 32344858555, "luis@gmail.com",9);
print_r("<pre>");
print_r($objEstudiante);
print_r("</pre>");
echo "Profesor";
$objProfesor = new Profesor("Jose Garnez", 3103945456, "Jose@gmail.com", "Matematicas");
print_r("<pre>");
print_r($objProfesor);
print_r("</pre>");
?>