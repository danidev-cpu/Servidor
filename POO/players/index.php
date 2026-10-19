<?php
require_once "player.php";
require_once "team.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player</title>
</head>

<body>
    <?php
    $team = new Team("Atletico de madrid");

    $totalMatches = 0;
    ?>

    <ul>
        <li>Team: <?php $team->name ?></li>
        <li>Matches: <?php ?> </li>
        <li>Won: </li>
        <li>Lost: </li>
        <li>Tie: </li>
        <li>Score Goals: </li>
        <li>Conceded Goals: </li>
        <li>Players:</li>
    </ul>

    <!-- Tabla con los datos de los jugadores -->
    <table>
        <thead>
            <tr>
                <th>Player</th>
                <th>Age</th>
                <th>Country</th>
                <th>Dorsal</th>
                <th>Position</th>
                <th>Goals</th>
                <th>Matches</th>
                <th>Minutes</th>
                <th>Yellow Cards</th>
                <th>Red Cards</th>
            </tr>
        </thead>
        <?php
        if (!$archivo = fopen("plantillas.csv", "r")) {
            echo "No se ha podido abrir el archivo";
        } else {
            fgetcsv($archivo, 0, ",", "\"", "\\"); // cabecera
            while (($datosCeldas = fgetcsv($archivo, 0, ",", "\"", "\\")) !== false) {
                if (count($datosCeldas) < 20) {
                    continue;
                }
                $nuevoJugador = new Player(
                    $datosCeldas[4],
                    $datosCeldas[6],
                    $datosCeldas[9],
                    $datosCeldas[11],
                    $datosCeldas[17],
                    $datosCeldas[12],
                    $datosCeldas[16],
                    $datosCeldas[18],
                    $datosCeldas[19]
                );
                $team->SignPlayer($nuevoJugador);

        ?>
                <tbody>
                    <tr>
                        <td><?php echo $nuevoJugador->name; ?></td>
                        <td><?php echo $nuevoJugador->birthday; ?></td>
                        <td><?php echo $nuevoJugador->country; ?></td>
                        <td><?php echo $nuevoJugador->dorsal; ?></td>
                        <td><?php echo $nuevoJugador->position; ?></td>
                        <td><?php echo $nuevoJugador->goals; ?></td>
                        <td><?php echo $nuevoJugador->matches; ?></td>
                        <td><?php echo $nuevoJugador->minutes; ?></td>
                        <td><?php echo $nuevoJugador->yellowCard; ?></td>
                        <td><?php echo $nuevoJugador->redCard; ?></td>
                    </tr>
                </tbody>
        <?php
            }
        }
        fclose($archivo);
        ?>
    </table>
</body>

</html>