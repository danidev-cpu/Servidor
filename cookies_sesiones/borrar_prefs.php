<?php
$nombre = $_REQUEST["username"] ?? "";
$color = $_REQUEST["color"] ?? "#ffffff";

setcookie("nombreUsu", "", time() + 3000);
setcookie("colorBody", "", time() + 3000);

header("Location: index.php");
