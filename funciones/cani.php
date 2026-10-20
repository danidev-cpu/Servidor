
<?php
$frase = "Esto es una frase";

function cantidadLetras($frase): string
{
    $resultado = "";
    for ($i = 0; $i < strlen($frase); $i++) {
        if ($i % 2 == 0) {
            $resultado .= strtoupper($frase[$i]);
        } else {
            $resultado .= $frase[$i];
        }
    }
    return $resultado;
}

echo cantidadLetras($frase);
