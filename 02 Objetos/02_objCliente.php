<?php
require_once("02_class_cliente.php");
$objCliente =  new Cliente(10029382478,"Pepito Perez", "pepito@gmail.com", 90000);
$objCliente->getDatospersonales();
print_r('<pre>');
print_r($objCliente);
print_r('<pre>');
echo("<br>");
echo "Cedula: ".$objCliente->getCedula().("<br");
echo $objCliente->Credito();
?>