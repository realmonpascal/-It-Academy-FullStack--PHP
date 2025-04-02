<?php
$Alumnos = [
    "Raul" => [6,5,7,9,10],
    "Jimena" => [5,4,3,2,3],
    "Alex" => [6,4.5,8,9,4],
    "Ruben" => [6.5,9.4,5,8,9],
    "Paolo" => [9,10,10,9,7],
];

function calcularMedias($Alumnos) {
    $resultados = [];
    $sumaClase = 0;
    
    foreach ($Alumnos as $nombre => $notas) {
        $media = array_sum($notas) / count($notas);
        $resultados[$nombre] = $media;
        $sumaClase += $media;
    }
    
    return [
        'individuales' => $resultados,
        'mediaClase' => $sumaClase / count($Alumnos)
    ];
}

$medias = calcularMedias($Alumnos);

foreach ($medias['individuales'] as $nombre => $media) {
    echo $nombre . ": La media es " . number_format($media, 2) . "<br>";
}

echo "<br>La media de la clase es: " . number_format($medias['mediaClase'], 2);
?>