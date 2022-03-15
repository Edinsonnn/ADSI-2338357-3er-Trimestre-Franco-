<?php
require_once("despachador.php");
$objDespachador = new Despachador();
//Insertar pasajero
$objDespachador->insertarDespachador("Fabio londoño", 3223457541, 100, "floo@gmail.com", "2455655");

?>