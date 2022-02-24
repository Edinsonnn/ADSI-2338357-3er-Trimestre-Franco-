<?php
class Producto
{
public $descripcion;
private $precio;
public $stock;
static $estado= "Activo";

public function __construct(string $vr_descripcion, int $vr_precio,)
{
    $this->descripcion=$vr_descripcion;
    $this->stock=40;
    $this->precio=$vr_precio;
    Producto::$estado="Activo";
}
//Set the value of estado
public function setEstado($vrestado)
{
Producto::$estado = $vrestado;
}

public function getInfoProducto()
{
    $arrayinfoproducto = array (
        'Descripcion: ' => $this->descripcion,
        'Precio:' => $this->precio,
        'Stock: ' => $this->stock,
        'Estado: ' => Producto::$estado,

    );
 return $arrayinfoproducto;
}


//Get the value of precio
public function getPrecio()
{
return $this->precio;
}

// Set the value of precio
public function setPrecio($v_precio)
{
$this->precio = $v_precio;

return $this;
}

// Get the value of estado 
public function getEstado()
{
return $this->estado;
}

}
?>