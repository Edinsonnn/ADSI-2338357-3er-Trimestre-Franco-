
<?php
require_once("05_Persona_Superclass.php");
require_once("05_Empleado_Subclass.php");
require_once("05_Contador_class.php");

echo "<h3>Clase persona : </h3>";
$objPersona= new Persona("Marcos",20);
$objPersona->getDatos();
print_r($objPersona);

echo "<h3>Clase Empleado : </h3>";
$objEmpleado= new Empleado(2000000,"Felipe",21);
$objEmpleado->getDatos();
print_r($objEmpleado);
echo("<br>");
Echo "Sueldo: ".$objEmpleado->getSueldo();

echo "<h3>Clase Contador : </h3>";
$objContador=new Contador("Carmen",25,1500000,20,5);
$objContador->getDatos();
print_r($objContador);
echo("<br>");
Echo "Dias Laborados: ".$objContador->getdiaslaborados();
?>