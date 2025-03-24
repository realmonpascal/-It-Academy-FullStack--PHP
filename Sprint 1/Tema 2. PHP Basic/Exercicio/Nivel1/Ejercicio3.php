<?php
declare(strict_types=1);
$x = 5;
$y= 7;
$N= 6.5;
$M= 8.4;


echo "El valor de x es = ". $x ."<br>"."El valor de y es = ". $y. "<br>". "La suma de x y y es = ". $x+$y . "<br>". "La resta de x y y es = ". $x-$y ."<br>". "El producto de x y y es = ". $x*$y."<br>". "El modulo de x y y es = ". $x/$y."<br>".
"---------------------------------"."<br>".
 "El valor de N es = ". $N ."<br>"."El valor de M es = ". $M. "<br>". "La suma de x y y es = ". $N+$M . "<br>". "La resta de x y y es = ". $N-$M ."<br>". "El producto de N y M es = ". $N*$M."<br>". "El modulo de N y M es = ". $N/$M."<br>"."---------------------------------"."<br>".
 "El doble de x es =" . ($x*2). "<br>"."El doble de y es =" . ($y*2)."<br>"."El doble de N es =" . ($N*2). "<br>"." El doble de M es = " . ($M*2)."<br>"."---------------------------------"."<br>"." La suma total de las variables es = ".($x+$y+$N+$M)."<br>"."---------------------------------"."<br>";


 function calculadora($num1,$num2,$opcion){

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
 
echo "Suma " . calculadora(5,6,"suma")."<br>"."---------------------------------"."<br>";
echo "Resta" . calculadora(8,4,"resta")."<br>"."---------------------------------"."<br>";
echo "Multiplicacion " . calculadora(7,9,"multiplicacion")."<br>"."---------------------------------"."<br>";
echo "Division " . calculadora(8,2,"division")."<br>"."---------------------------------"."<br>";
?>