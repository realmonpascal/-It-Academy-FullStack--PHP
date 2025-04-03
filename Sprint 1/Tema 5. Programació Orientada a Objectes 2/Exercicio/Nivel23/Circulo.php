<?php
require_once'Shape.php';
 class Circulo extends Shape{

    private $radio;

    function __construct( $radio ){
        $this->radio=$radio;
    }
function calcularArea(){
    return "El total del area es ". M_PI*pow($this->radio,2);
    
}}


?>