<?php
require_once("07_claseLibro.php");
require_once("07_claseRevista.php");
$objLibro=new libro(298300," LA ILIADA","GABRIEL GARCIA MARQUEZ");

print_r("<pre>");
print_r($objLibro);
print_r("</pre>");

$objRevista=new revista(200603," "," "," ", 210);
print_r("<pre>");
print_r($objRevista);
print_r("</pre>");
?>