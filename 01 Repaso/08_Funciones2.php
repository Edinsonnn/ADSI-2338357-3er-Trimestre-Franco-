<?php
$var_texto = "centro de teleinformatica y producion industrial";
$var_convetir=$var_texto;
//minusculas a mayusculas
function conversion_mayus($var_texto){
    $var_convetir=strtoupper($var_texto);
return $var_convetir;
}
//mayusculas a minusculas
echo conversion_mayus($var_convetir);
echo("</br>");
function conversion_minus($var_texto){
    $var_convetir=strtolower($var_texto);
return $var_convetir;
}
echo conversion_minus($var_convetir);
//Primera mayuscula
echo("</br>");
function conversion_first($var_texto){
    $var_convetir=ucfirst($var_texto);
return $var_convetir;
}
echo conversion_first($var_convetir);
//Primeras cada palabra mayusculas
echo("</br>");
function conversion_fr($var_texto){
    $var_convetir=ucwords($var_texto);
return $var_convetir;
}
echo conversion_fr($var_convetir);

?>