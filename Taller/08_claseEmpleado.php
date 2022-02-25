<?php
require_once("08_clasePersona.php");
class Empleado extends Persona{
    public $sueldo;
  

    function __construct($vrnombre, $vredad, $vrsueldo)
    {
        parent::__construct($vrnombre, $vredad);
        $this->sueldo=$vrsueldo;
        $this->nombre= $vredad;
        $this->estado= "activo";
    }

    public function getPersona()
    {
        $arrarifoPersona = array (
            'Nombre: '=>$this->nombre,
            'Edad: '=>$this->edad,
            'Estado: '=>$this->estado,
        );
        return $arrarifoPersona;
    }

    public function getestado()
    {
        return $this->estado;
    }
    public function setestado($estado)
    {
        return $this->estado=$estado;
    }
}


?>