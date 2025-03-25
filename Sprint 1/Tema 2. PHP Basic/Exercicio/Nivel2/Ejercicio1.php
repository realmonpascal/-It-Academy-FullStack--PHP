<?php
function cossteLlamada($minutos){
    $coste_base = 0.10;
    $coste_adicional = 0.05;
    if($minutos<=3&& $minutos>=0){
        return $coste_base;

    }else if($minutos>=3){
        $minutos_extra= $minutos-3;
     return $coste_total = $coste_base+($minutos_extra*$coste_adicional);
    }else{ return 'Las llamadas no pueden tener minutos negativos';}
   
}
echo cossteLlamada(10)."<br>";
echo cossteLlamada(20)."<br>";
echo cossteLlamada(2)."<br>";
echo cossteLlamada(-5)."<br>";

?>