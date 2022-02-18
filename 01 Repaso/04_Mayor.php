<h1>Numero Mayor En PHP</h1>
<?php
$varm1 = 10;
$varn2 = 43;
$varn3 = 20;
if($varm1 > $varn2 && $varm1 > $varn3){
echo("El mayor es: ".$varm1);
}else{
    if($varn2 > $varm1 && $varn2 > $varn3){
        echo("El mayor es: ".$varn2);
    }else{
        if($varn3 > $varm1 && $varn3 > $varn2){
            echo("El mayor es: ".$varn3);
        }
    }
}


?>