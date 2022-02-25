<?php
class Peluqueria{
private $id_peluqeria;
public $nombre;
public $dirección;
public $teléfono;
public $hora_inicio;
public $hora_cierre;
private $valor_corte; 
protected $servicio;

public function __construct(int $vr_id, string $vr_nombre, $vr_direccion, int $vr_telefono, $vr_hinicio, $vr_hcierre,$vr_corte,$vrServicio)
{
    $this->id_peluqeria=$vr_id;
    $this->nombre=$vr_nombre;
    $this->dirección=$vr_direccion;
    $this->teléfono=$vr_telefono;
    $this->hora_inicio=$vr_hinicio;
    $this->hora_cierre=$vr_hcierre;
    $this->servicio=$vrServicio;
    $this->valor_corte=$vr_corte;
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


//Get the value of id_peluqeria
public function getId_peluqeria()
{
return $this->id_peluqeria;
}

//Get the value of servicio
public function getServicio()
{
return $this->servicio;
}

//Set the value of servicio
public function setServicio($servicio)
{
$this->servicio = $servicio;

return $this;
}
public function AgendarCita()
    {
        $arrayAgenda= array (

            'Servicio: '=>$this->servicio,
            'Valor del corte: '=>$this->valor_corte,
        );
        return $arrayAgenda;
    }
}
	
?>