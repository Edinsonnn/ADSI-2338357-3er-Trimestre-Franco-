<?php
class Libro {
    private $codigo;
    public $titulo;
    private $autor;

    function __construct($vrcodigo,$vrtitulo,$vrautor)
    {
        $this->codigo=$vrcodigo;
        $this->titulo=$vrtitulo;
        $this->autor=$vrautor;
    }
    function getcodigo(){
        return $this->codigo;
    }
    function getautor(){
        return $this->autor;
    }
}

?>