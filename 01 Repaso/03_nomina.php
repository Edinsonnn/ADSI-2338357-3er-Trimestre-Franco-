<?php
// nombres, documento, salario, fecha_ingreso, clave

// dias trabajados - salario minimo
$var_nombre = "Mario Segura";
$var_documento = 1003094959;
$var_salario = 34000;
$var_fechaingreso = date("Y-m-d");
$var_clave = rand(111111, 999999);
$var_diastrabajados = rand (00, 999);
$var_salariotot = $var_salario*$var_diastrabajados;

echo("Nombre: ").$var_nombre;
echo("<br>");
echo("Documento: ".$var_documento);
echo("<br>");
echo("Fecha de ingreso: ".$var_fechaingreso);
echo("<br>");
echo("Clave: ".$var_clave);
echo("<br>");
echo("Dias Trabajados: ".$var_diastrabajados);
echo("<br>");
echo("Salario:".$var_salariotot);
echo("<br>");
echo("Solicitud Prestamo");
echo("<br>");
if($var_salariotot == 1000000){
    echo("El trabajador puede acceder a un prestamo de $5.000.000");
}elseif($var_salariotot==2000000){
echo("El trabajador pupuede acceder a un prestamo de $7.000.000");
}elseif($var_salariotot == 3000000){
echo("El trabajador pupuede acceder a un prestamo de $10.000.000");
}else{
    echo("El trabajador No cumple con los requisitos");
}


?>