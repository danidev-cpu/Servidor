<?php

function digitos(int $num): int
{
    $cantidad = strlen($num);
    return $cantidad;
}
/* echo digitos(31233); */
function digitosN(int $num, int $pos): int
{
    return "$num"[$pos];
}
/* echo digitosN(31233, 3); */
function quitarPorDetras(int $num, int $cant)
{
    /* $resultado = substr("$num", 0, strlen($num) - $cant);
    return $resultado; */
    $aux = pow(10, $cant);
    return floor($num / $aux);
}
/* echo quitarPorDetras(31233, 2); */

function quitarPorDelante(int $num, int $cant)
{
    /* $resultado = substr("$num", 0, strlen($num) - $cant);
    return $resultado; */
    $aux = pow(-10, $cant);
    return floor($num / $aux);
}
echo quitarPorDelante(12345, 4);
