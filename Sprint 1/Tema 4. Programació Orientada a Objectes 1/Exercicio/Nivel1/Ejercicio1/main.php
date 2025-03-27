<?php
include('Employee.php');





$Empleado = new Employee();
$Empleado->setNombre('Ramon');


$Empleado->setSueldo(6001);

echo $Empleado->comprobarImpuestos()."<br>";

$Empleado1 = new Employee();
$Empleado1->setNombre('Gamon');

$Empleado1->setSueldo(5999);
echo $Empleado1->comprobarImpuestos();


?>