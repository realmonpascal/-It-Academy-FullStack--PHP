<?php
class  Animal{

    private $animal= "Musaraña elefante";
    public function __tostring(){
        return "Esto es un animal ". $this->animal;
    }
}
$animal = new Animal();
echo $animal;
?>