<?php
class Electrodomestico{
    public $marca;
   
    function __construct($vrmarca)
    {
        $this->marca=$vrmarca;
        $this->iva=0.19;
    }
}

?>