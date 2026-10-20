<?php

$frase = "Esto es una frase";

function leerFrases($frase): string
{
    $nuevaFrase = "";
    for ($i = 0; $i < strlen($frase); $i++) {
        if ($i % 2 == 0) {
            $nuevaFrase .= $frase[$i];
        }
    }
    return $nuevaFrase;
}
echo leerFrases($frase);
