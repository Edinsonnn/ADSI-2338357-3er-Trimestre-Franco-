<?php
 require_once("02_Aprendiz_class.php");
 $objAprendiz = new Aprendiz(124325355, "Frued simon", "Aroca", "Fundamentos de la programacion", 4.0, 5.0, 5.0);
 echo "Nombre: ".$objAprendiz->getNombres().("<br>");
 print_r("<pre>");
print_r($objAprendiz);
print_r("</pre");
echo"<br>Aprendiz: </br>".$objAprendiz->getNombreS()." ". $objAprendiz->getApellidos()."</br>";
echo"<br>Calificacion Definitiva: </br>".$objAprendiz->Definitiva();
echo"<br>Concepto Valorativo: </br>".$objAprendiz->getConceptoValorativo();
echo"<br>Valoracion Cualitativa: </br>".$objAprendiz->ValoracionCualitativa();


?>