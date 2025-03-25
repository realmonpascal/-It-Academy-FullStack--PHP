<?php

require_once('Shape.php');
class triangulo extends Shape{
public function calcularArea(){
    return $this->altura*$this->amplada/2;

}
}
?>