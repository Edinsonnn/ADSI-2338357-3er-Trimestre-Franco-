<?php
class Persona
{
    //Atributos
    protected $cedula;
    public $nombres;
    protected $edad;
    //Contructor
    function __construct(int $vr_cedula, string $vr_nombres, $vr_edad)
    {
        $this->cedula = $vr_cedula;
        $this->nombres = $vr_nombres;
        $this->edad = $vr_edad;
    } //end constructor
    public function getDatospersonales()
    {
        $arrayDatospersonales = array(
            'Cedula: ' => $this->cedula,
            'Nombres:' => $this->nombres,
            'Email: ' => $this->edad,
        );
        return $arrayDatospersonales;
    }
    //Get the value of cedula
    public function getCedula()
    {
        return $this->cedula;
    }

    //Set the value of cedula
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }
}
?>