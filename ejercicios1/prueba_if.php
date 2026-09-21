<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Ifs</title>
</head>

<body>
    <?php
    $nota1 = 8;
    $nota2 = 7;

    $resultado = 0;

    if ($nota1 > $nota2) {
        $resultado = $nota1; ?>
        <p>El numero <?= $nota1 ?> es mayor que <?= $nota2 ?></p>
    <?php
    } else {
        $resultado = $nota2; ?>
        <p>El numero <?= $nota1 ?> es menor que <?= $nota2 ?> </p>
    <?php
    }
    ?>
</body>

</html>