<?php
 require_once("02_Aprendiz_class.php");
 $objAprendiz = new Aprendiz(124325355, "Frued simon", "Aroca", "Fundamentos de la programacion", 5.0, 5.0, 5.0);
 echo "Nombre: ".$objAprendiz->Nombres.("<br>");
 echo "Su definitiva es: " .$objAprendiz->Defnitva();
 echo ("</br>");
 echo $objAprendiz->ConceptoValorativo();

 
?>