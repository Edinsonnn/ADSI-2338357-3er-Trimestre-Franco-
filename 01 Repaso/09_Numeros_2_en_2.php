<?php
echo("For");
echo("<br>");
for ($i = 0; $i <=50; $i+=2){
    echo $i;
}
echo("<br>");
echo("While");
echo("<br>");
$n = 0;
 while ( $n <=50):
     echo$n;
     $n+=2;
 endwhile;

    echo("<br>");
    echo("Do-While");
    echo("<br>");
$j = 0;
   do{
    echo$j;
    $j+=2;
    
       
   }while($j <51);

   /* echo("<br>");
 echo("Foreach");
 echo("<br>");
$array = array(1,2,3);
foreach($array as $valor){
    $valor= $valor*2;
    print_r($array);
    
}*/
?>