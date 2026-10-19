<?php

$hora = "12:63:112";

function extraerTexto(string $hora)
{
    $horaExtraida = explode(":", $hora, 3);
    $resultado = [];


    if ($horaExtraida[0] >= 0 && $horaExtraida[0] < 24) {
        $resultado[] = "La hora que has puesto es valida: <b>$horaExtraida[0]</b>";
    } else {
        $resultado[] = "<font color='red'><b>$horaExtraida[0]</b> horas no son validas</font>";
    }

    if ($horaExtraida[1] >= 0 && $horaExtraida[1] < 60) {
        $resultado[] = "Los minutos que has puesto son validos:<b>$horaExtraida[1]</b>";
    } else {
        $resultado[] = "<font color='red'><b>$horaExtraida[1]</b> minutos no son validos</font>";
    }

    if ($horaExtraida[2] >= 0 && $horaExtraida[2] < 60) {
        $resultado[] = "Los segundos que has puesto son validos: <b>$horaExtraida[2]</b>";
    } else {
        $resultado[] = "<font color='red'><b>$horaExtraida[2]</b> segundos no son validos</font>";
    }

    return implode("<br>", $resultado);
}
