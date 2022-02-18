<?php
class Aprendiz{
//Atributos
public $Docidentidad;
public $Nombres;
public $Apellidos;
public $Asignatura;
public $Pparcial;
public $Sparvial;
public $Examenfinal;

//Constructor
function __construct(int $vr_Docid, string $vr_nombres, $vr_apellidos, $vr_asignaatura, $vr_Pparcial, $vr_sparcial, $vr_examen)
{
    $this->Docidentidad=$vr_Docid;
    $this->Nombres=$vr_examen;
    $this->Apellidos=$vr_apellidos;
    $this->Asignatura=$vr_asignaatura;
    
}



}
?>