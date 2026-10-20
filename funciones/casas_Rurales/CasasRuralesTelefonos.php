<?php
$archivo = fopen(__DIR__ . "/casas_rurales.csv", "r");
$casasRurales = [];
$descartadas = 0;

if ($archivo !== false) {
    $cabeceras = fgetcsv($archivo, 0, ";", "\"", "\\");
    /* var_dump($cabeceras); */

    if ($cabeceras !== false) {
        $indices = array_flip($cabeceras);
        var_dump($indices);


        while (($datos = fgetcsv($archivo, 0, ";", "\"", "\\")) !== false) {
            $telefono = $datos[$indices["telefono"]] ?? "";

            if (trim($telefono) === "") {
                $descartadas++;
                continue;
            }

            $casasRurales[] = [
                "id" => $datos[$indices["id"]] ?? "",
                "localidad" => $datos[$indices["localidad"]] ?? "",
                "nombre" => $datos[$indices["nombre"]] ?? "",
                "telefono" => $telefono,
            ];
        }
    }

    fclose($archivo);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casas Rurales</title>
</head>

<body>
    <?php if ($archivo === false): ?>
        <p>No se ha podido abrir el archivo.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Localidad</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($casasRurales as $casa): ?>
                    <tr>
                        <td><?= htmlspecialchars($casa["id"], ENT_QUOTES, "UTF-8") ?></td>
                        <td><?= htmlspecialchars($casa["localidad"], ENT_QUOTES, "UTF-8") ?></td>
                        <td><?= htmlspecialchars($casa["nombre"], ENT_QUOTES, "UTF-8") ?></td>
                        <td><?= htmlspecialchars($casa["telefono"], ENT_QUOTES, "UTF-8") ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p>Casas rurales descartadas por no tener teléfono: <?= $descartadas ?></p>
    <?php endif; ?>
</body>

</html>