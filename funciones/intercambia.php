<?php

function cambia(&$num1, &$num2): void
{
    $aux = $num1;
    $num1 = $num2;
    $num2 = $aux;
}
$num1 = 2;
$num2 = 4;
cambia($num1, $num2);
echo "El num 1 es: $num1, El num 2 es: $num2";
