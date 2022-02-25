<?php
class Torneo
{
public $nombreequipo;
public $numintegrantes;
public $estado;
function __construct($vr_nombre, $vr_numer)
{
    $this->nombreequipo=$vr_nombre;
    $this->numintegrantes=$vr_numer;
    $this->estado="Ascenso";
}

public function Estado($vr_wins) {
    $puntos = $vr_wins*3;
    if($puntos>15){
        $this->estado="Descenso";
        $est = $this->estado; 
  echo $est;
    }
 }
}
?>