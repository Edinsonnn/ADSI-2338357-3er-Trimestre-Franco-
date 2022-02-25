<?php
require_once("01_producto_class.php");
require_once("02_Mueble_class.php");
//Class Producto
echo "<h3> Producto </h3>";
$objProducto = new Producto("Mesa amarilla", 5000000);
$objProducto->getInfoProducto();

print_r('<pre>');
print_r($objProducto);
print_r('</pre>');

echo "Precio: ".number_format($objProducto->getPrecio());
echo ("<br>");
echo "Estado: ".Producto::$estado;
$objProducto->setEstado("Inactivo");
echo ("<br>"); 
echo "Nuevo Estado: ".Producto::$estado;
echo ("<br>");
$objProducto->setPrecio(9500000);
echo "Nuevo Precio: ".number_format($objProducto->getPrecio());
echo ("<br>"); 

//Class Mueble
echo "<h3> Mueble </h3>";
$objMueble = new Mueble("Silla", 4500000, "blanca", "roble");
$objMueble ->getInfoProducto();
print_r('<pre>');
print_r($objMueble);
print_r('</pre>');
echo "Precio: ".number_format($objMueble->getPrecio());
echo ("<br>");
echo "Estado: ".Mueble::$estado;
$objMueble->setEstado("Inactivo");
echo ("<br>");
echo "Nuevo Estado: ".Mueble::$estado;
echo ("<br>"); 
$objProducto->setPrecio(6500000);
echo "Nuevo Precio: ".number_format($objMueble->getPrecio());
echo ("<br>"); 
?>