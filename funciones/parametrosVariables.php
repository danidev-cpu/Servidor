<?php

function numMayor()
{
    if (func_num_args() == 0) {
        return false;
    } else {
        $numMayor = func_get_arg(0);

        for ($i = 1; $i < func_num_args(); $i++) {
            if (func_get_arg($i) > $numMayor) {
                $numMayor = func_get_arg($i);
            }
        }
        return " El numero mayor es: {$numMayor}";
    }
}

echo numMayor(4, 7, 2, 4);
