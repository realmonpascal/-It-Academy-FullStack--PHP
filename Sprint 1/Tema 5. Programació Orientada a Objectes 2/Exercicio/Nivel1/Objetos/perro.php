<?php
require_once('Animal.php');

class Perro extends Animal {
    public function mostrarSonido() {
        return $this->nombre . " hace Guau Guau";
    }
}


?>