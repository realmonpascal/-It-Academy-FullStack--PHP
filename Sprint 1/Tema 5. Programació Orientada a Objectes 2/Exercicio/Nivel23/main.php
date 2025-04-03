<?php
require'Circulo.php';
require 'Rectangulo.php';
require 'Triangulo.php';


$Triangulo=new Triangulo(5,5);
echo $Triangulo->calcularArea()." "."<br>";
$Cuadrado = new Rectangulo(5,5);
echo $Cuadrado ->calcularArea()." "."<br>";
$Circulo = new Circulo(5);
echo $Circulo->calcularArea();


?>