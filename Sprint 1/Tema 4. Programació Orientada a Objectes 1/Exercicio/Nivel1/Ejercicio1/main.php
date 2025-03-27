<?php
include('Employee.php');





$Empleado = new Employee('Ramon',6500);





echo $Empleado->comprobarImpuestos()."<br>";

$Empleado1 = new Employee('Gamon',5999);



echo $Empleado1->comprobarImpuestos();


?>