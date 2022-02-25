<?php
class Empleado
{
    //Atributos
    private $nombre;
    private $celular;
    private $cargo;
    public $sueldo;
    static $auxilio;

    //Contructor
    function __construct(string $vr_nombre, int $vr_celular, String $vr_cargo, $vr_sueldo)
    {
        $this->nombre = $vr_nombre;
        $this->celular = $vr_celular;
        $this->cargo = $vr_cargo;
        $this->sueldo = $vr_sueldo;
    } //end constructor

    public function getDatos()
    {
        $arrayDatos = array(
            'Nombre: ' => $this->nombre,
            'Celular: ' => $this->celular,
            'Cargo: ' => $this->cargo,
            'Sueldo: ' => $this->sueldo,
        );
        return $arrayDatos;
    }

    public function getDtosEmpleado()
    {
        $arrayDatosEmpleado = array(
            'Cargo: ' => $this->cargo,
            'Sueldo: ' => $this->sueldo
        );
        return $arrayDatosEmpleado;
    }

    public function PagoRetencion()
    {
        $ps=$this->sueldo;
        if ($ps >= 3750000) {
            $pago = $ps * 0.09;
            echo ("El empleado debe pagar por retencion en la fuente un total de : " . $pago);
        } else {
            echo ("El empleado no debe pagar por retencion en la fuente °_°");
        }
    }

    // Get the value of cargo
    public function getCargo()
    {
        return $this->cargo;
    }

    // Get the value of nombre
    public function getNombre()
    {
        return $this->nombre;
    }

    //Get the value of celular
    public function getCelular()
    {
        return $this->celular;
    }

    //Set the value of nombre
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    // Set the value of celular
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }
}//end class
?>