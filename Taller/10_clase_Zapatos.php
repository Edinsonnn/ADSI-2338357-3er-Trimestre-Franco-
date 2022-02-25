<?php
class Zapato
{
public $talla;
public $marca;
public $stock;

public function __construct($vr_talla, $vr_marca, $vr_stock)
{
    $this->talla=$vr_talla;
    $this->marca=$vr_marca;
    $this->stock=$vr_stock;
}

public function getVerInventario()
{
$arrayInventario = array
(
    'Talla: '=> $this->talla,
    'Marca: '=> $this->marca,
    "Stock: "=> $this->stock,
);
return $arrayInventario;
}

}
?>