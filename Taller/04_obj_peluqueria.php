<?php
require_once("04_Peluqueria_class.php");
$objPeluqueria = new Peluqueria(123434,"Belleza S.a","calle 42 bn 6a",3167364713,"7:30 AM","8:00 PM", 12000,"Coloracion");
echo "Nombre ".$objPeluqueria->nombre;

print_r('<pre>');
print_r($objPeluqueria);
print_r('</pre>');

echo "Disponible en la agenda".("<br>");
print_r($objPeluqueria->AgendarCita());
?>