<?php
require('Animales/Gallina.php');
require('Animales/perro.php');
require('Animales/Gato.php');



// Uso correcto de las clases
$miPerro = new Perro("Perro");
echo $miPerro->mostrarSonido() . "<br>";

$miGato = new Gato("Gato");
echo $miGato->mostrarSonido() . "<br>";

$miGallina = new Gallina("Gallina");
echo $miGallina->mostrarSonido() . "<br>";
?>