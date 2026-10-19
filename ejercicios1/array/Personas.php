<?php

$personas = [
    ['nombre' => 'Aitor', 'altura' => 182, 'email' => 'aitor@correo.com'],
    ['nombre' => 'Juan', 'altura' => 175, 'email' => 'juan@correo.com']
];


for ($i = 0; $i < count($personas); $i++) {
    foreach ($personas[$i] as $p) {
        echo $p . " ";
    }
    echo "</br>";
}
