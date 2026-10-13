<?php
require_once "player.php";
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
    $p1 = new Player("Daniel", "16/11/2005", "Valencia", 10, 23, 15, 205, 0, 0);
    /* $team = new Team("Ateletico de madrid", ) */
    echo $p1->Age() . "</br>";
    echo $p1->goals . "</br>";
    echo $p1->Score();
    $p1->addCard(1);

    ?>

    <ul>
        <li>Team: Atletico </li>
        <li>Matches: </li>
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
        <tbody>
            <tr>
                <td><?php echo $p1->Age() ?></td>
                <td><?php echo $p1->birthday ?></td>
                <td><?php echo $p1->country ?></td>
                <td><?php echo $p1->dorsal ?></td>
                <td><?php echo $p1->goals ?></td>
                <td><?php echo $p1->matches ?></td>
                <td><?php echo $p1->minutes ?></td>
                <td></td>
                <td><?php echo $p1->yellowCard ?></td>
                <td><?php echo $p1->redCard ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>