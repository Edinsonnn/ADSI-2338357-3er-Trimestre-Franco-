<?php
class Netflix
{
public $titulo;
public $ancreacion;
public $alquilada;
public $fecdevolucion;

public function __construct(string $vr_titulo, $vr_ancreacion, bool $Vr_alquilada, $vr_fecdevolucion)
{
$this->titulo=$vr_titulo;
$this->ancreacion=$vr_ancreacion;
$this->alquilada=$Vr_alquilada;
$this->fecdevolucion=$vr_fecdevolucion;

}
public function CostoAlquiler()
{


}
    

}

?>