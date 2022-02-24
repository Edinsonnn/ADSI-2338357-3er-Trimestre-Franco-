<?php
class Persona
{
    public $nombre;
    public $edad;

    public function __construct(string $vr_nombre, int $vr_edad)
    {
        $this->nombre = $vr_nombre;
        $this->edad = $vr_edad;
    }
public function getDatos(){
    $arrayDatos = array(
        'Nombre: ' => $this->nombre,
        'Edad: ' => $this->edad,
    );
    return $arrayDatos;
    
}
    
}
?>