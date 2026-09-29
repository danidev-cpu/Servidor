<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Array con repeticiones</h3>
    <?php
    $arrayRepeticiones = [];

    for ($i = 1; $i < 50; $i++) {
        $num = mt_rand(0, 99);

        //Con repeticiones
        if (in_array($num, $arrayRepeticiones)) {
            $arrayRepeticiones[$i] = $num;
            echo $arrayRepeticiones[$i] . "(repetido) ";
        } else {
            $arrayRepeticiones[$i] = $num;
            echo $arrayRepeticiones[$i] . "  ";
        }
        if ($i % 5 == 0) echo "</br>";
    }

    ?>
    <h2>Este es el contenido del array sin repeticiones:</h2>

    <?php
    $array = [];
    $result = [];

    for ($i = 0; $i < 50; $i++) {
        do {
            $numero = mt_rand(0, 99);
        } while (in_array($numero, $array));

        $array[$i] = $numero;
        $result[] = $array[$i];
    }
    sort($result);
    echo implode(" ", $result) . '</br> </br>';

    echo '<b>El numero mayor es:</b> ' . $result[count($result) - 1] . '</br>';
    echo '<b>El numero mayor es:</b> ' . $result[0] . '</br>';
    echo '<b>La media es: </b> ' . array_sum($array) / 50 . '</br>';
    ?>

</body>

</html>