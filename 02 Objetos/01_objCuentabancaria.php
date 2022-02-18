<?php
require_once("01_class_cuenta_bancaria.php");
// crear una intancia de la cuenta bancaria
$objCuentabancaria = new Cuentabancaria(1001, "Ahorro", 1020000, "Retiro");
echo $objCuentabancaria->id . "<br>";
$objCuentabancaria->getCuentabancaria();
print_r('<pre>');
print_r($objCuentabancaria);
print_r('<pre>');
echo $objCuentabancaria->retiro(3000)."<br>";
echo $objCuentabancaria->getSaldo()."<br>";
echo $objCuentabancaria->consignar(5000)."<br>";
echo "Tipo de cuenta: ". $objCuentabancaria->getTipocuenta();
$objCuentabancaria->setTipocuenta("Cuenta corriente");
echo ("<br>");
echo "Tipo de cuenta: ". $objCuentabancaria->getTipocuenta();
?>