<?php
$array1 = [2,4.5,6,8,9,13.3];
$array2=[1,3.5,6,7,9,13.5];

$numerosComunes = array_intersect($array1,$array2);
$mezcla= array_merge($array1,$array2);
echo "Numeros comunes: ".implode($numerosComunes),"<br>";
echo "Numeros comunes: ".implode($mezcla)."<br>";
?>