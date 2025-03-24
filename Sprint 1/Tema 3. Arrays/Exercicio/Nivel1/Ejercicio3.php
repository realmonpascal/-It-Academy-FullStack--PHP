<?php
function caracter(array $paraules, string $caracter): bool {
    $caracter = strtolower($caracter);
    foreach ($paraules as $paraula) {
        if (strpos(strtolower($paraula), $caracter) === false) {
            return false; // Si alguna paraula no el conté, retornem false
        }
    }
    
    return true; 
}

$exemple1 = ["hola", "Php", "Html"];
var_dump(caracter($exemple1, 'h')); 
echo'<br>';
var_dump(caracter($exemple1, 'l')); 
echo'<br>';
var_dump( caracter($exemple1,'p'));

$exemple2 = ["Casa", "coche", "CÍRCULO"];
echo'<br>';
var_dump(caracter($exemple2, 'c')); 
?>