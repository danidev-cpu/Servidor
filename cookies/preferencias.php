<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencias</title>
</head>

<body>
    <form action="guarda_pref.php" method="post">
        <label for="username">Nombre usuario</label>
        <input type="text" id="username" name="username"><br>
        <label for="color">Color favorito</label>
        <input type="color" id="color" name="color" value="#ffffff"><br>
        <button type="submit">Acceder</button>
    </form>
</body>

</html>