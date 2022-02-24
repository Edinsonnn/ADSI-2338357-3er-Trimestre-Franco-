<?php
require_once("01_producto_class.php");

$objProducto = new Producto("Mesa amarilla", 5000000);

echo "Precio: ".number_format($objProducto->getPrecio());
echo ("<br>");
echo "Estado: ".Producto::$estado;
echo ("<br");
$objProducto->setEstado("Inactivo");
echo "Estado: ".Producto::$estado;
$objProducto->getInfoProducto();
echo ("<br>");
print_r('<pre>');
print_r($objProducto);
print_r('</pre>');

echo ("<br>"); 
$objProducto->setPrecio(9500000);
echo "Precio: ".number_format($objProducto->getPrecio());

?>