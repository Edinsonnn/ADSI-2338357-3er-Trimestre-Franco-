<?php
class Empleado extends Persona 
{

private $sueldo;

public function __construct($vr_sueldo, $vr_nombre, $vr_edad)
{
    parent::__construct($vr_nombre, $vr_edad); 
    $this->sueldo=$vr_sueldo;
}

//Get the value of sueldo
public function getSueldo()
{
return $this->sueldo;
}


}
?>