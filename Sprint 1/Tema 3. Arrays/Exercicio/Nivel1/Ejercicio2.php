<?php
$X = [10, 20, 30, 40, 50,60];



print_r ($X);

echo "<br>"."Tamaño Inicial de la array " . count($X) ."<br>";

$clave = array_search(30,$X);
if($clave!== false){
    unset($X[$clave]);
}
$X= array_values($X);

echo "Despues de eliminar un objeto " . count($X) ."<br>";

print_r ($X);
?>