<?php
require_once("10_clase_Zapatos.php");
class Deportivos extends Zapato
{
    public $descripcion;

    public function __construct($vr_descricion, $vr_talla, $vr_marca, $vr_stock)
    {
        parent::__construct($vr_talla, $vr_marca, $vr_stock);
        $this->descripcion = $vr_descricion;
    }
    public function getVerInventario()
    {
        $arrayInventario = array(
            'Descripcion: ' => $this->descripcion,
            'Talla: ' => $this->talla,
            'Marca: ' => $this->marca,
            "Stock: " => $this->stock,
        );
        return $arrayInventario;
    }
}
