<?php
class Partidos extends Torneo
{
public $partwins;

function __construct($vr_nombre, $vr_numer, $vr_wins)
{
    parent::__construct($vr_nombre, $vr_numer);
    $this->partwins=$vr_wins;
   
}


}
?>