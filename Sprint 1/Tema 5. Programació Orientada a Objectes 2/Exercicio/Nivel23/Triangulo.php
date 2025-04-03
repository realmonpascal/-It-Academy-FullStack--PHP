<?php

require_once 'Shape.php';
 class Triangulo extends Shape{

    function __construct($altura, $amplada){
    $this->altura=$altura;
    $this->amplada=$amplada;
    }
    

    function calcularArea(){
        return "El total del area es ". ($this->amplada*$this->altura)/2;
        
    }
 }
 ?>