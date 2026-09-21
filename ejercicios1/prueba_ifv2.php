<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Ifs V2</title>
</head>

<body>
    <ul>


        <?php
        $nota1 = 8;
        $nota2 = 7;
        $nota3 = 10;

        $resultado = 0;

        ?>
        <li>Nota 1 : <?php $nota1 ?></li>
        <li>Nota 2 : <?php $nota2 ?></li>
        <li>Nota 3 : <?php $nota3 ?></li>

        <?php



        if ($nota1 > $nota2) {
            $resultado = $nota1; ?>
            <li>El numero <?= $nota1 ?> es el ganador</li>
        <?php
        } else if ($nota2 > $nota3) {
            $resultado = $nota2; ?>
            <li>El numero <?= $nota2 ?> es el ganador</li>
        <?php
        } else {
            $resultado = $nota3; ?>
            <li>El numero <?= $nota3 ?> es el ganador</li>
        <?php
        }
        ?>
    </ul>
</body>

</html>