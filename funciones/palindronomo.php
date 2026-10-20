<?php
$frase = "ligar es ser agil";
$fraseMal = "esto es una frase";


function esPalindronomo($frase)
{
    $sinEspacios = str_replace(" ", "", $frase);
    echo "La frase seleccionada es : <b>$frase</b> </br>";
    $invertida = strrev($sinEspacios);
    if ($sinEspacios == $invertida) {
        return "<p style='color: green'>la frase es palindronoma</p>";
    } else {
        return "<p style='color: red'>la frase no es palindronoma</p>";
    }
}

echo esPalindronomo($frase);
echo esPalindronomo($fraseMal);
