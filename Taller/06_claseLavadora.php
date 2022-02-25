<?php
require_once("06_claseElectrodomestico.php");
class Lavadora extends Electrodomestico{
    private $cantidad;
    private $precio;

    public function __construct($vrmarca, $vrcantidad, $vrprecio)
    {
        parent::__construct($vrmarca,);
        $this->cantidad=$vrcantidad;
        $this->precio=$vrprecio;
    }
    public function getIfo(){
        $arrayinfo = array(
            'Marca: '=> $this->marca,
            'Precio: '=> $this->precio,
        ); 
        return $arrayinfo;
    }
    public function getcantidad(){
        return $this->cantidad;
    }
    public function getprecio(){
        return $this->precio;
    }

    function Venta()
    {
        $venta=(($this->cantidad*$this->iva)+$this->cantidad)*$this->precio;
        return$venta;
    }
}
?>