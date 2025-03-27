<?php
require_once('Animal.php');


class Gallina extends Animal {
    public function mostrarSonido() {
        return $this->nombre . " hace Quiquiriquí";
    }
}
?>