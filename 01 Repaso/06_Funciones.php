<?php
$vr_disco = 4.5;

function conversion_disco($vr_tam_disco){
    $vr_re=$vr_tam_disco*1000000000;
return $vr_re;
}
echo "El resultado de convertir ".$vr_disco." GB"." a Bytes es: ".conversion_disco($vr_disco);

?>