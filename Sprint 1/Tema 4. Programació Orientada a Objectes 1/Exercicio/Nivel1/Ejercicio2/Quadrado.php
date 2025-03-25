<?php

require_once('Shape.php');
class quadrado extends Shape{

    
    public function calcularArea(){
       return $this->altura*$this->amplada;
    }

}
?>