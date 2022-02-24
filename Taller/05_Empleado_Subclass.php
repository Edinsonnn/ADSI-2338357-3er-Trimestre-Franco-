<?php
class Empleado extends Persona 
{

private $sueldo;

public function __construct(int $vr_sueldo, string $vr_nombre, int $vr_edad)
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