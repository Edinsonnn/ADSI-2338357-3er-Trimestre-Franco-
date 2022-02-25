<?php
class Persona {
    private $nombre;
    public $edad;

    function __construct($vrnombre, $vredad)
    {
        $this->nombre=$vrnombre;
        $this->edad=$vredad;
    }

    public function getPersona()
    {
        $arraryfoPersona = array (
            'Nombre: '=>$this->nombre,
            'Edad: '=>$this->edad,
        );
        return $arraryfoPersona;
    }

    public function getNombre(){
        return$this->nombre;
    }public function setNombre($nombre){
        return$this->nombre=$nombre;
    }
}
?>