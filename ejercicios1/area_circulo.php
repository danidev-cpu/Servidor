<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Circulo</title>
</head>

<body>
    <?php
    $radio = 3.5;
    define('PI', 3.1316);
    $result =  PI * $radio * $radio;
    ?>
    <p>El área del círculo de <?= $result ?></p>
</body>

</html>