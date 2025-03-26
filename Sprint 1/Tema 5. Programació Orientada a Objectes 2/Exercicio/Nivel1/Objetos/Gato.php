<?php
 require_once('Animal.php');

class Gato extends Animal {
    public function mostrarSonido() {
        return $this->nombre . " hace Miau";
    }
}
?>