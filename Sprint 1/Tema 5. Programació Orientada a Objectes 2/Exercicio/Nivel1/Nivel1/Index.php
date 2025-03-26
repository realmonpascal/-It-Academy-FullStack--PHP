<?php
require('Objetos/Gallina.php');
require('Objetos/perro.php');
require('Objetos/Gato.php');



// Uso correcto de las clases
$miPerro = new Perro("Perro");
echo $miPerro->mostrarSonido() . "<br>";

$miGato = new Gato("Gato");
echo $miGato->mostrarSonido() . "<br>";

$miGallina = new Gallina("Gallina");
echo $miGallina->mostrarSonido() . "<br>";
?>