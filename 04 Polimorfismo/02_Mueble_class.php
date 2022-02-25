<?php
require_once ("01_producto_class.php");

class Mueble extends Producto {

public $color;
public $Material;

public function __construct($vr_descripcion, $vr_precio, $vr_color, $vr_material)
{

    parent::__construct($vr_descripcion, $vr_precio);
    $this->color=$vr_color;
    $this->Material=$vr_material;
}

}
?>