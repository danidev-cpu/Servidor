<?php
session_start();
require 'includes/cabecera.inc.php';

 $login = '';
 $error = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';
    $usuarioValido = false;

    if (is_string($login) && is_string($password)) {
        $login = trim($login);
        $usuarios = file(__DIR__ . '/usuarios.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        if ($usuarios !== false) {
            foreach ($usuarios as $usuario) {
                $credenciales = explode(':', $usuario, 2);

                if (count($credenciales) === 2 && $credenciales[0] === $login && $credenciales[1] === $password) {
                    $usuarioValido = true;
                    break;
                }
            }
        }
    }

    if ($usuarioValido) {
        $_SESSION['loginusu'] = $login;
        header('Location: index.php');
        exit;
    }

    $error = true;
}

cargar_plantilla('Iniciar Sesión', function () use ($login, $error) {
    echo '
    <form action="" method="POST">
      <div class="mb-3">
        <label for="login" class="form-label">Login</label>
        <input type="text" class="form-control" id="login" name="login" value="' . htmlspecialchars($login, ENT_QUOTES, 'UTF-8') . '" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Iniciar Sesión</button>' .
      ($error ? '<p class="text-danger mt-3 mb-0">El login o la contraseña son incorrectos.</p>' : '') .
      '</form>';
});
