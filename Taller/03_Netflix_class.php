<?php
class Netflix
{
private $titulo;
private $ancreacion;
protected $alquilada;
public $dialquilada;
public $fecdevolucion;

public function __construct(string $vr_titulo, $vr_ancreacion, bool $Vr_alquilada, $vr_fecdevolucion, $vr_dial)
{
$this->titulo=$vr_titulo;
$this->ancreacion=$vr_ancreacion;
$this->alquilada=$Vr_alquilada;
$this->fecdevolucion=$vr_fecdevolucion;
$this->dialquilada=$vr_dial;
}
Public function getInfo()
    {
        $arrayInfo = array (
            'Nombre de la pelicula: '=>$this->titulo,
            'Año de creacion: '=>$this->ancreacion,
            'Dispinible para Alquiler: '=>$this->alquilada,
            'Fecha prevista de devolucion: '=>$this->fecdevolucion,
        );
        return $arrayInfo;
        
    }
public function CostoAlquiler($costo)
{
    if ($this->dialquilada<=5) {
        $costo=$this->dialquilada*4000;
       }else{
        $costo="Usted se paso de los dias de prestamo su total es: $".$this->dialquilada*6000;
       }
       return$costo;
        
    }

    
// Get the value of titulo
public function getTitulo()
{
return $this->titulo;
}

// Set the value of titulo
public function setTitulo($titulo)
{
$this->titulo = $titulo;

return $this;
}

// Get the value of ancreacion
public function getAncreacion()
{
return $this->ancreacion;
}

// Get the value of alquilada
public function getAlquilada()
{
return $this->alquilada;
}
}

?>