<?php
require_once("01_class_cliente.php");
$objCliente = new Cliente(21423554, "Ximena Paredes", "Ximena@gmail.com", 2300000);
echo $objCliente->nombres,("<br>");
echo $objCliente -> fecha_reg, ("<br>");
echo $objCliente->getCedula(),("<br>");
echo $objCliente->getEmail(),("<br>");
echo $objCliente->Credito().("<br>");

?>