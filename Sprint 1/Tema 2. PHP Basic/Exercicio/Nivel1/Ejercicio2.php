<?php
$Palabra1="Hello World";
$conversorMayus = strtoupper($Palabra1);
echo "El total de caracteres de ".$Palabra1." Son ". strlen($Palabra1)."<br>";
$invertirPalabra = strrev($conversorMayus);
echo $invertirPalabra. "<br>";
$palabra2= " Este es el curso de PHP";
echo $conversorMayus . $palabra2;

?>