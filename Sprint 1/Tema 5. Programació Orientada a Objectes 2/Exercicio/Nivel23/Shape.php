<?php
 abstract class Shape {

    protected $altura;
    protected $amplada;

function __construct($altura,$amplada){
$this->$altura=$altura;
$this->$amplada=$amplada;

}
    
    abstract function calcularArea ();
    

 }
    



?>