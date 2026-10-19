<?php


$coches = [
    "111BCD" => ["Ford", "Focus", 5],
    "222XYZ" => ["Toyota", "Corolla", 4],
    "333LMN" => ["Seat", "Ibiza", 3]
];

echo  $coches["111BCD"][1];

foreach ($coches as $matricula => $datos) {
    echo "Matricula: $matricula </br> - Marca: {$datos[0]} </br> Modelo: {$datos[1]}";
    echo "</br></br></br>";
}
