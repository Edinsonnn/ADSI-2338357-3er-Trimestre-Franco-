<?php
    class Conexion{
    
            protected $db;
            private $driver   ="mysql";
            private $host     ="localhost";
            public $based    ="adsi_2338357";
            private $usuario  ="root";
            private $contraseña="";

            public function __construct()
            {
                try {
                    //$db premite crear una instancia a la clase PDO y enviar los atributos
                    //driver, host, based, usuario..
                    $db = new PDO("{$this->driver}:host={$this->host};dbname{$this->based}",
                    $this->usuario, $this->contraseña);
                    //setAttribute verificar o traer los posibles errores en la conexion
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo "conexion exitosa";
                    return $db;
                } catch (\PDOException $e) {
                    echo "Ha ocurrido un error al conectarse a la BD".$e->getMessage();
                }
            }
}//endd classe


$conectarDb = new Conexion();
print_r($conectarDb);

?>