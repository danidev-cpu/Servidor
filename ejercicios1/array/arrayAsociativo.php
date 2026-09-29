<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array asociativo</title>
</head>

<style>
    body {
        width: auto;
        /* display: flex;
        flex-wrap: wrap; */
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(20%, 1fr));
    }

    ul {
        width: 10px;
        display: flex;
    }
</style>

<body>

    <?php

    $numsAleatorios = [];

    for ($i = 0; $i < 100; $i++) {
        $numsAleatorios = rand('0', '100');
        echo '<ul><li>' . $numsAleatorios . '</li></ul>';
        if ($i % 5 == 0) echo '</ul>';
    }
    ?>

</body>

</html>