<?php
include "Persona.php";
include "Estudiante.php";

$p1 = new Persona("26627799D", "Daniel", "negretegomez@gmail.com");
$p2 = new Estudiante("37782832P", "Paco", "pacoporras@gmail.com", "23313");

$seleccionado = $_POST['opciones'] ?? '';


$usuarioActual = null;
if ($seleccionado === '1') {
    $usuarioActual = $p1;
} elseif ($seleccionado === '2') {
    $usuarioActual = $p2;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guardar']) && $usuarioActual) {
    $usuarioActual->nombre = $_POST['nombre'];
    $usuarioActual->email = $_POST['email'];


    if ($usuarioActual instanceof Estudiante && isset($_POST['numMatricula'])) {
        $usuarioActual->numMatricula = $_POST['numMatricula'];
    }

    $mensaje = "¡Datos actualizados correctamente usando los setters mágicos!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuarios</title>
</head>

<body>


    <form method="POST">
        <label for="opciones">Editar usuarios:</label>
        <select id="opciones" name="opciones" onchange="this.form.submit()">
            <option value="">Selecciona un usuario</option>
            <option value="1" <?= $seleccionado === '1' ? 'selected' : '' ?>><?= $p1->nombre ?></option>
            <option value="2" <?= $seleccionado === '2' ? 'selected' : '' ?>><?= $p2->nombre ?></option>
        </select>
    </form>

    <hr>

    <?php if (isset($mensaje)): ?>
        <p style="color: green;"><?= $mensaje ?></p>
    <?php endif; ?>

    <?php if ($usuarioActual): ?>
        <form method="POST">

            <input type="hidden" name="opciones" value="<?= $seleccionado ?>">

            <h3>Editando a: <?= $usuarioActual->nombre ?></h3>

            <div>
                <label>DNI (No editable):</label>
                <input type="text" value="<?= $usuarioActual->DNI ?>" disabled>
            </div>
            <br>
            <div>
                <label>Nombre:</label>

                <input type="text" name="nombre" value="<?= $usuarioActual->nombre ?>">
            </div>
            <br>
            <div>
                <label>Email:</label>
                <input type="email" name="email" value="<?= $usuarioActual->email ?>">
            </div>
            <br>

            <?php if ($usuarioActual instanceof Estudiante): ?>
                <div>
                    <label>Matrícula:</label>
                    <input type="text" name="numMatricula" value="<?= $usuarioActual->numMatricula ?>">
                </div>
                <br>
            <?php endif; ?>

            <button type="submit" name="guardar">Guardar cambios</button>
        </form>
    <?php endif; ?>

</body>

</html>