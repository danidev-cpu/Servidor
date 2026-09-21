<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>

<body>
    <?php
    for ($i = 0; $i <= 100; $i++) {
        echo $i;
        echo ",";
    }
    echo "</br>";

    $a = 0;
    while ($a <= 100) {
        echo $a;
        echo "-";
        $a++;
    }
    ?>
</body>

</html>