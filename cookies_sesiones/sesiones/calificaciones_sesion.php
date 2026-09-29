<?php
session_start();

if (!isset($_SESSION['calificaciones'])) {
    $_SESSION['calificaciones'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nota1 = (float) ($_POST['nota1'] ?? 0);
    $nota2 = (float) ($_POST['nota2'] ?? 0);
    $nota3 = (float) ($_POST['nota3'] ?? 0);

    $_SESSION['calificaciones'][] = [
        'nombre' => trim($_POST['nombreAlumno'] ?? ''),
        'nota1' => $nota1,
        'nota2' => $nota2,
        'nota3' => $nota3,
        'media' => ($nota1 + $nota2 + $nota3) / 3,
    ];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
</head>

<body>
    <form method="post" id="formulario">
        <input type="text" id="nombreAlumno" name="nombreAlumno">
        <input type="number" id="nota1" name="nota1" placeholder="nota1">
        <input type="number" id="nota2" name="nota2" placeholder="nota2">
        <input type="number" id="nota3" name="nota3" placeholder="nota3">
        <button type="submit">Añadir</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Media</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['calificaciones'] as $calificacion): ?>
                <tr>
                    <td><?= htmlspecialchars($calificacion['nombre'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars((string) $calificacion['nota1'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars((string) $calificacion['nota2'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars((string) $calificacion['nota3'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars(number_format($calificacion['media'], 2), ENT_QUOTES, 'UTF-8') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>