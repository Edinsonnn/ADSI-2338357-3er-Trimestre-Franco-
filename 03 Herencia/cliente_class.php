<?php 
    require_once("02_class_persona.php");

    class Cliente extends Persona{
        
        private $credito;

        public function __construct($vrcedula, $vrnombre, $vredad, $vrcredito)
        {
            //envio los atributos se asignen a la clase Persona
            parent::__construct($vrcedula, $vrnombre, $vredad);
            $this->credito = $vrcredito;    
        }

        
    }
?>