<?php
class  Animal{
    public function __tostring(){
        return "Esto es un animal";
    }
}
$animal = new Animal();
echo $animal->__tostring();
?>