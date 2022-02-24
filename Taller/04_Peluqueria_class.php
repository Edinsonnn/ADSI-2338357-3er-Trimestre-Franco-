<?php
class Peluqueria{
public $id_peluqeria;
public $nombre;
public $dirección;
public $teléfono;
public $hora_inicio;
public $hora_cierre;
private $valor_corte; 
public $servicio;

public function __construct(int $vr_id, string $vr_nombre, $vr_direccion, int $vr_telefono, $vr_hinicio, $vr_hcierre)
{
    $this->id_peluqeria=$vr_id;
    $this->nombre=$vr_nombre;
    $this->dirección=$vr_direccion;
    $this->teléfono=$vr_telefono;
    $this->hora_inicio=$vr_hinicio;
    $this->hora_cierre=$vr_hcierre;
}



//Get the value of valor_corte
public function getValor_corte()
{
return $this->valor_corte;
}

//Set the value of valor_corte
public function setValor_corte($valor_corte)
{
$this->valor_corte = $valor_corte;

return $this;
}

}

	
?>