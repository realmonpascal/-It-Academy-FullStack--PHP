<?php
require('Quadrado.php');
require('Triangulo.php');


 $quadrado = new quadrado();
 $quadrado->setAltura(10);
 $quadrado->setAmplada(10);
 echo $quadrado->calcularArea()."<br>";

 $triangulo = new triangulo();
 $triangulo->setAmplada(5);
 $triangulo->setAltura(6);
 echo $triangulo->calcularArea()."<br>";
?>