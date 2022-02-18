<?php 
    require_once("02_class_persona.php");
    require_once("cliente_class.php");

    //Instancia de la clase persona
    $objPersona = new Persona(20010030,"Andrea Ruiz",32);
    echo "<h2> Llamado a la clase Persona </h2><br>";
    echo "Cedula de la persona: " . $objPersona->getCedula()."<br>";
    echo "Nombres: " . $objPersona->nombres."<br>";
    $objPersona->setCedula(300010020);
    echo "Cedula de la persona: " . $objPersona->getCedula()."<br>";
    //Instancia Cliente
   $objcliente = new Cliente(1214241,"pepe","pe@gmail.com",2414141);
    echo "<h2> Llamado a la clase Persona </h2><br>";
    echo "Cedula de la persona: " . $objcliente->getCedula()."<br>";
    echo "Nombres: " . $objcliente->nombres."<br>";
    $objcliente->setCedula(300010020);
    echo "Cedula de la persona: " . $objcliente->getCedula()."<br>";

?>