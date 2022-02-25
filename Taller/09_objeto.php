<?php
require_once ("09_clase_Torneo.php");
$objTorneo = new Torneo("Indigo FC",12);
print_r($objTorneo);
echo ("<br>");
Echo "Nuevo estado".$objTorneo->Estado(4);
print_r($objTorneo);

?>