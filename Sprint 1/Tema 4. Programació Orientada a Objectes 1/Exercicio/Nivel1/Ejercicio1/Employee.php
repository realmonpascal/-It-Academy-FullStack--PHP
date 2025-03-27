<?php


class Employee{
private  $nombre;
private $sueldo;

public function setNombre(string $nombre): void {
    $this->nombre = $nombre;
}

public function setSueldo(float $sueldo): void {
    $this->sueldo = $sueldo;
}


 function comprobarImpuestos(){

    if($this->sueldo>6000){
        return $this->nombre." Has de pagar impuestos";
    }else {

        return $this->nombre." no has de pagar impuestos";
    }
}
}

?>