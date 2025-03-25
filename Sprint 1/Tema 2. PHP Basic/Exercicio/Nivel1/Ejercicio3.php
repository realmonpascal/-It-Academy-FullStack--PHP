<?php
declare(strict_types=1);
$x = 5;
$y= 7;
$N= 6.5;
$M= 8.4;


echo "El valor de x es = ". $x ."<br>"."El valor de y es = ". $y. "<br>". "La suma de x y y es = ". $x+$y . "<br>". "La resta de x y y es = ". $x-$y ."<br>". "El producto de x y y es = ". $x*$y."<br>". "El modulo de x y y es = ". $x/$y."<br>".
 "El valor de N es = ". $N ."<br>"."El valor de M es = ". $M. "<br>". "La suma de x y y es = ". $N+$M . "<br>". "La resta de x y y es = ". $N-$M ."<br>". "El producto de N y M es = ". $N*$M."<br>". "El modulo de N y M es = ". $N/$M."<br>".
 "El doble de x es =" . ($x*2). "<br>"."El doble de y es =" . ($y*2)."<br>"."El doble de N es =" . ($N*2). "<br>"." El doble de M es = " . ($M*2)."<br>"." La suma total de las variables es = ".($x+$y+$N+$M)."<br>"." El producto total de todas las variables es = ". $x*$y*$M*$N."<br>";


 function operarCalculadora($num1,$num2,$opcion){

    switch($opcion){
        case "suma":
            echo "El numero es = ".$num1." El numero es = ".$num2."<br>"; 
            return $num1 +$num2;
            break;
        case "resta": 
            echo "El numero es = ".$num1." El numero es = ".$num2."<br>"; 
            return $num1-$num2;
            break;
        case "multiplicacion": 
            echo "El numero es = ".$num1." El numero es =  ".$num2."<br>"; 
            return $num1*$num2;
            break;
        case "division" : 
            echo "El numero es = ".$num1."  El numero es =  ".$num2."<br>"; 
            return  $num1/$num2;
            break;
            default:
            return "Operacion no valida";
    }

 }
 
echo "Suma " . operarCalculadora(5,6,"suma")."<br>";
echo "Resta" . operarCalculadora(8,4,"resta")."<br>";
echo "Multiplicacion " . operarCalculadora(7,9,"multiplicacion")."<br>";
echo "Division " . operarCalculadora(8,2,"division")."<br>";
?>