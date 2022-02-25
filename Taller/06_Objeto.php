<?php
require_once("06_claseElectrodomestico.php");
require_once("06_claseLavadora.php");
$objLavadora1 = new Lavadora("LG",5,1350000);
print_r($objLavadora1->getIfo());
echo ("<br>");
$objLavadora2 = new Lavadora("Wirpool",8,1150000);
print_r($objLavadora2->getIfo());
echo ("<br>");
echo "Venta 1".$objLavadora1->Venta();
echo ("<br>");
echo "Venta 2".$objLavadora2->Venta();

?>