<?php

require_once"01_class_persona.php";

class Empleado extends Persona
{
    //Atributos
    public $cargo;
    public $salario;
    //Contructor
    function __construct(int $vr_cedula, string $vr_nombres, $vr_edad, $vr_salario, $vr_celular, $vr_cargo)
    {
       
       parent::__construct($vr_cedula, $vr_nombres, $vr_edad, $vr_celular);
      $this->cargo=$vr_cargo;
      $this->salario=$vr_salario;
    
    } //end constructor

    public function getDatospersonales()
    {
        $arrayDatospersonales = array(
            'Cedula: ' => $this->cedula,
            'Nombres:' => $this->nombres,
            'Email: ' => $this->email,
            'Fecha de regitro:' => $this->fecha_reg,
            'Clave:' => $this->pasword,

        );
        return $arrayDatospersonales;
    }
    public function Credito()
    {
        if ($this->salario >= 1000000) {
            $cred = ("El trabajador puede acceder a un prestamo de $2.000.000 con un 1.5% de interes");
        } else {
            $cred = ("El trabajador No cumple con los requisitos");
        }
        return $cred;
    }


    //Get the value of cedula
    public function getCedula()
    {
        return $this->cedula;
    }

    // Get the value of email
    public function getEmail()
    {
        return $this->email;
    }

    //Set the value of cedula
    public function setCedula($v_cedula)
    {
        $this->cedula = $v_cedula;

        return $this;
    }

    // Set the value of email
    public function setEmail($v_email)
    {
        $this->email = $v_email;

        return $this;
    }

   /* public function subsidioTransp()
    {
        if ($this->salario >= 1900000) {
            $subs = $salario * 0.23;
            $newsalario = $salario + $subs;
            echo ("Su salario con el subsidio (23%) de transporte es:" . $newsalario);
        }else{
            $this->salario;
            $sl = $salario;
            $subs2 = $sl * 0.26;
            $newsalario = $sl + $subs2;
            echo ("Su salario con el subsidio (26%) de transporte es:" . $newsalario); 
        }
    }*/
    
}//end class
