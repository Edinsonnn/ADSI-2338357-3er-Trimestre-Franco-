<?php
require_once("07_claseLibro.php");
class Revista extends Libro{
    protected $edicion;
    protected $paginas;

    function __construct($vrcodigo,$vrtitulo,$vrautor,$vredicion,$vrpaginas)
    {
        parent::__construct($vrcodigo,$vrtitulo,$vrautor);
        $this->edicion=$vredicion;
        $this->paginas=$vrpaginas;
    }
    public function getedicion(){
        return $this->edicion;
    }public function setedicion($edicion){
        return $this->edicion=$edicion;
    }
    public function getpaginas(){
        return $this->paginas;
    }public function setpaginas($paginas){
        return $this->paginas=$paginas;
    }
}
?>
