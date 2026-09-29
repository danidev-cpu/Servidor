<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>

<body>

    <p>Este contador va del 1 al 100:</p>
    <?php
    for ($i = 0; $i <= 100; $i++) {
        echo $i;
        echo ",";
    }
    echo "</br>";
    echo "<p>Este contador va del 10 al 1:</p>";
    for ($i = 10; $i >= 0; $i--) {
        echo $i;
        echo ",";
    }
    ?>
</body>
1

</html>