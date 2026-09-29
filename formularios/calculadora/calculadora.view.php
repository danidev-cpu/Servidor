<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora</h1>

    <h2>Contenido de $_GET</h2>
    <pre><?php print_r($_GET); ?></pre>

    <h2>Operaciones</h2>
    <table border="1" cellpadding="6">
        <?php foreach ($resultados as $op => $valor): ?>
            <tr>
                <td><?= $op ?></td>
                <td><?= $valor ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Contenido de $_SERVER</h2>
    <pre><?php print_r($_SERVER); ?></pre>

    <h2>Preguntas resueltas</h2>
    <ul>
        <li><b>¿Qué ordenador hace la petición?</b> <?= $ordenador ?></li>
        <li><b>¿Dónde están los parámetros?</b> En el array $_GET</li>
        <li><b>Ruta del sitio en local:</b> <?= $rutaLocal ?></li>
        <li><b>Script actual:</b> <?= $scriptActual ?></li>
    </ul>
</body>

</html>