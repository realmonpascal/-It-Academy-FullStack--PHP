<?php
include('Objeto.php');





$Empleado = new Employee();
$Empleado->nombre ="Ramon";
$Empleado->sueldo =6500;

echo $Empleado->comprobarImpuestos()."<br>";

$Empleado1 = new Employee();
$Empleado1->nombre ="Gamon";
$Empleado1->sueldo =2500;

echo $Empleado1->comprobarImpuestos();


?>