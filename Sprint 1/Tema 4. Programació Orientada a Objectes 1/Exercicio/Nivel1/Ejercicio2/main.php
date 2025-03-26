<?php
require('Quadrado.php');
require('Triangulo.php');


 $quadrado = new quadrado(10,5);

 echo $quadrado->calcularArea()."<br>";

 $triangulo = new triangulo(10,5);


 echo $triangulo->calcularArea(10,5)."<br>";
?>