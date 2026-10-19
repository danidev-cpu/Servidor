<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Array Bidimensional - Máximo y Mínimo</title>
    <style>
        table {
            border-collapse: collapse;
            font-family: sans-serif;
            margin: 20px auto;
        }

        td {
            border: 1px solid #999;
            padding: 12px 18px;
            text-align: center;
            font-weight: bold;
        }

        .azul {
            color: blue;
        }

        .verde {
            color: green;
        }

        .negro {
            color: black;
            font-weight: normal;
        }
    </style>
</head>

<body>

    <?php

    $arrayLimpio = [];
    $contador = 0;
    echo "<table>";
    for ($i = 0; $i < 54; $i++) {

        if ($i % 6 === 0) {
            echo "<tr>";
        }


        echo "<td>";
        do {
            $numero = mt_rand(100, 999);
            echo "</br>";
        } while (in_array($numero, $arrayLimpio));
        $arrayLimpio[] = $numero;
        echo $arrayLimpio[$i];
        echo "</td>";
        $contador++;

        if ($i % 6 === 5) {
            echo "</tr>";
        }
    }
    echo "</table>";

    ?>

</body>

</html>