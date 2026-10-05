<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
</head>

<body>
    <form method="post" id="formulario">
        <input type="text" id="nombreAlumno" name="nombreAlumno" required>
        <input type="number" id="nota1" name="nota1" placeholder="Nota 1" required>
        <input type="number" id="nota2" name="nota2" placeholder="Nota 2" required>
        <input type="number" id="nota3" name="nota3" placeholder="Nota 3" required>
        <button type="submit">Añadir</button>
    </form>

    <table>
        <th>Nombre</th>
        <th>Primer</th>
        <th>Segundo</th>
        <th>Segundo</th>
        <th>Media</th>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombreAlumno = $_POST['nombreAlumno'] ?? '';
            $nota1 = (float)$_POST['nota1'] ?? '';
            $nota2 = (float)$_POST['nota2'] ?? '';
            $nota3 = (float)$_POST['nota3'] ?? '';
            $media = ($nota1 + $nota2 + $nota3) / 3;

            $_COOKIE['calificaciones'][] = [
                'nombre' => trim($_POST['nombreAlumno'] ?? ''),
                'nota1' => $nota1,
                'nota2' => $nota2,
                'nota3' => $nota3,
                'media' => ($nota1 + $nota2 + $nota3) / 3,
            ];

            setcookie('nombre', $nombreAlumno, time() + 3000);
            setcookie('nota1', $nota1, time() + 3000);
            setcookie('nota2', $nota2, time() + 3000);
            setcookie('nota3', $nota3, time() + 3000);
            setcookie('media', $media, time() + 3000);


            echo '<tr>';
            foreach ($_COOKIE['calificaciones'] as $campo => $value) {
                /* echo '<td>' . htmlspecialchars($_COOKIE[$campo]) . '</td>'; */
                echo '<td>' . htmlspecialchars($_COOKIE['nombre']) . '</td>';
                echo '<td>' . htmlspecialchars($_COOKIE['nota1']) . '</td>';
                echo '<td>' . htmlspecialchars($_COOKIE['nota2']) . '</td>';
                echo '<td>' . htmlspecialchars($_COOKIE['nota3']) . '</td>';
                echo '<td>' . number_format($_COOKIE['media'], 2) . '</td>';
                echo '</tr>';
            }
        } else {
            new Exception("Mensaje de error");
        }

        ?>
    </table>
</body>

</html>