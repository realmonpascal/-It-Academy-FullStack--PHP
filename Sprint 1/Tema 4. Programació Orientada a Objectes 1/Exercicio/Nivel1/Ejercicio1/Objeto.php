<?php
class Employee{
public $nombre;
public $sueldo;



 function comprobarImpuestos(){

    if($this->sueldo>6000){
        return $this->nombre." Has de pagar impuestos";
    }else {

        return $this->nombre." no has de pagar impuestos";
    }}
}

?>