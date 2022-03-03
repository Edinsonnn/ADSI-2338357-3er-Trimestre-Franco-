<?php
class Persona{

    public $nombre;
    private $celular;
    private $email;

    public function __construct($vr_nombre, $vr_celular, $vr_email)
    {
        $this->nombre=$vr_nombre;
        $this->celular=$vr_celular;
        $this->email=$vr_email;
    }
    
    public function getDatosPersona(){
        $arrayDatos = array(
            'Nombre: ' => $this->nombre,
            'Celular: ' => $this->celular,
            'Email: ' => $this->email,
        );
        return $arrayDatos;
    }

    //Get the value of celular
    public function getCelular()
    {
        return $this->celular;
    }

    //Set the value of celular
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }
}

?>