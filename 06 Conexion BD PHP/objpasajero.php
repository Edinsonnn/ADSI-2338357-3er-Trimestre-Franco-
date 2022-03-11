<?php
require_once("pasajero.php");
$objpasajero = new Pasajero();
//Insertar pasajero
//$objpasajero->insertarPasajeros("jose lod", "anffs@gmail.com", 3134325435);

/*
$verPasajeros = $objpasajero->getPasajeros();
print_r('<pre>');
print_r($verPasajeros);
print_r('</pre>');
*/
//Buscar Pasajero
/*
$buscar = $objpasajero->buscarPasajero(3);
print_r('<pre>');
print_r($buscar);
print_r('</pre>');
*/
//Actualizar Pasajero
/*
$updatePasajero = $objpasajero;
$updatePasajero->updatePasajero(3, "Jio Belen", "bll@gmail.com", 3223334456);
*/
//ver Cambios
/*
print_r('<pre>');
print_r($updatePasajero->getPasajeros());
print_r('</pre>');
*/
//Eliminar pasajero!!
//$deletePasajero = $objpasajero->deletePasajero(3);
//ver Cambios
print_r('<pre>');
print_r($objpasajero->getPasajeros());
print_r('</pre>');
?>