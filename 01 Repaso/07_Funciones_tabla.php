<?php
 $var_num=$_POST["numero1"];
function tabla_multi($var_nu)
{
    if($var_nu<=20){
    for($i =0; $i <=10; $i++){
        $var_re=$var_nu*$i;
        echo $var_nu."X".$i."=".$var_re;
        echo ("<br>");
       
    } 
    return $var_re;
}
}
echo tabla_multi($var_num);

?>