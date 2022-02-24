<?php
class Aprendiz
{
    //Atributos
    public $Docidentidad;
    public $Nombres;
    public $Apellidos;
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

    public function Defnitva()
    {
        $n1 = $this->Pparcial;
        $n2 = $this->Sparcial;
        $fin = $this->Examenfinal;

        $def1 = $n1 * 0.3;
        $def2 = $n2 * 0.3;
        $deff = $fin * 0.4;

        $definitiva = $def1 + $def2 + $deff;

        return $definitiva;
    }
    public function ConceptoValorativo()
    {
        $cv = "";
        $def = $this->definitiva;
        if ($def < 2) {
            $cv = "Malo";
        } else {
            if ($def > 3 or $def < 4) {
                $cv = "Aceptable";
            } else {
                if ($def > 4 or $def < 4.5) {
                    $cv = "Excelente!";
                }
            }
        }
        return "Concepto Valorativo es " . $cv;
    }

    public function ValoracionCualitativa()
    {
        if ($this->definitiva > 3.5) {
            echo "El Aprendiz aprobo la competencia";
        } else {
            echo "El Aprendiz reprobo la competencia";
        }
    }
}


?>