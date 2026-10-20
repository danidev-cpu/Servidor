<?php

$frase = "Esto es una frase";

function cantidadLetras($frase): string
{
    $fraseExplotada = count(explode(" ", $frase));
    $fraseSinEspacios = strlen(str_replace(" ", "", $frase));
    return "Cantidad de palabras: " . $fraseExplotada . "Cantidad de letras {$fraseSinEspacios}";
}

echo cantidadLetras($frase);
