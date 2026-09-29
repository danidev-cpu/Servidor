<?php
$color = $_COOKIE['colorBody'] ?? "#ffffff";
$nombre = $_COOKIE['nombreUsu'] ?? "usuario";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencias</title>
    <style>
        body {
            background-color: <?php echo htmlspecialchars($_COOKIE['colorBody'] ?? "#fff"); ?>;
            transition: background-color 0.3s ease;
        }

        button {
            display: flex;
            margin: auto;
            margin-top: 300px;
            width: 200px;
            height: 200px;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <h1>Bienvenido <?php echo $nombre; ?></h1>
    <form action="preferencias.php" method="get">
        <button type="submit">Acceder a sesion</button>
    </form>

    <a href="borrar_prefs.php">Borrar Preferencias</a>
</body>

</html>