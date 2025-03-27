<?php

declare(strict_types=1);

class Employee {
    private string $nombre;
    private float $sueldo;

    public function __construct(string $nombre, float $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function comprobarImpuestos(): string {
        if($this->sueldo > 6000){
            return  $this->nombre." has de pagar impuestos";
        }
        return $this->nombre .  " no has de pagar impuestos";
    }
}
?>