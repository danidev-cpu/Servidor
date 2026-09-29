<?php
$nombre = $_REQUEST["username"] ?? "";
$color = $_REQUEST["color"] ?? "#ffffff";

setcookie("nombreUsu", $nombre, time() + 3000);
setcookie("colorBody", $color, time() + 3000);

header("Location: index.php");
exit;
