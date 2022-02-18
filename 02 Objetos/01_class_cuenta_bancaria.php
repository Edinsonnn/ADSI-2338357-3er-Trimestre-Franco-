<?php
class Cuentabancaria
{
    // atributos
    public $id;
    protected $typecuenta;
    protected $saldo;
    public $movimiento;
    public $fecha_movimiento;
    // metodo principal
    function __construct($vr_id, string $vr_typecuenta, float $vr_saldo, $vr_movimiento)
    {
        $this->id = $vr_id;
        $this->typecuenta = $vr_typecuenta;
        $this->saldo = $vr_saldo;
        $this->movimiento = $vr_movimiento;
        $this->fecha_movimiento = date('Y-m-d');
    } // end__costructor
    // metodos secundarios
    public function getCuentabancaria(){
        $arrayCuentabancaria = Array(
            'No. Cuenta: ' => $this->id,
            'Tipo de cuenta:' => $this->typecuenta,
            'Saldo: ' => $this->saldo,
            'Movimientos:' => $this->movimiento,
            'Fecha:' => $this->fecha_movimiento,
        );
        return $arrayCuentabancaria;
    }
    public function retiro(float $retiro){
       if ($this->saldo>$retiro){
       $vr_saldo = $this->saldo;
       $vr_saldo= $vr_saldo-$retiro;
       $this->saldo = $vr_saldo;
       }else{
           echo"El monto excede el saldo de la cuenta";
       }
           echo"Valor del retiro: $retiro"." nuevo saldo: ". $this->saldo;
       }
       public function consignar(float $ingreso){
           $saldo= $this->saldo;
        $vr_saldo = $this->saldo;
        $vr_saldo = $vr_saldo+$ingreso;
        $this->saldo = $vr_saldo;
        echo "Saldo actual: ".$saldo." Se consigno: $ingreso "."Nuevo saldo:".$this->saldo;
       }
       //Getters
       public function getTipocuenta(){
           return $this->typecuenta;
       }
       public function getSaldo(){
        return $this->saldo;
    }
     //Setters
     public function setTipocuenta($cuenta){
        $this->typecuenta=$cuenta;
    }
}//End class
?>