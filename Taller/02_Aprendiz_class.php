<?php
class Aprendiz
{
    //Atributos
    protected $Docidentidad;
    protected $Nombres;
    private $Apellidos;
    public $Asignatura;
    public $Pparcial;
    public $Sparcial;
    public $Examenfinal;
    private $definitiva;

    //Constructor
    function __construct(int $vr_Docid, string $vr_nombres, $vr_apellidos, $vr_asignaatura, $vr_Pparcial, $vr_sparcial, $vr_examen)
    {
        $this->Docidentidad = $vr_Docid;
        $this->Nombres = $vr_nombres;
        $this->Apellidos = $vr_apellidos;
        $this->Asignatura = $vr_asignaatura;
        $this->Pparcial = $vr_Pparcial;
        $this->Sparcial = $vr_sparcial;
        $this->Examenfinal = $vr_examen;
    }

    public function Definitiva()
    {
        $this->definitiva=(($this->Pparcial*0.3)+($this->Sparcial*0.3)+($this->Examenfinal*0.4));
        return $this->definitiva;
    }
    public function getConceptoValorativo()
    { 
        
        if ($this->definitiva<2) {
          $this->definitiva="Malo <br>"; 
        }elseif ($this->definitiva=3 or $this->definitiva<4) {
            $this->definitiva="Aceptable <br>";
        }elseif ($this->definitiva>=4 or $this->definitiva<4.5) {
            $this->definitiva="Excelente <br>";
        }
        return $this->definitiva;
    }

    public function ValoracionCualitativa()
    {
        if ($this->Definitiva()<3.5) {
        $this->definitiva="El aprendiz reprobo la competencia <br>";
        
        }elseif ($this->definitiva() >=3.5) {
            $this->definitiva="El aprendiz aprobo la competencia";
        }
        return $this->definitiva;
        
    }

    // Get the value of Nombres
    public function getNombres()
    {
        return $this->Nombres;
    }

    // Get the value of Apellidos
    public function getApellidos()
    {
        return $this->Apellidos;
    }
}


?>