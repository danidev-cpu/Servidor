<?php
// 1. Cogemos x e y de la URL. Si no vienen, ponemos 0 para evitar errores.
$x = isset($_GET['x']) ? (float)$_GET['x'] : 0;
$y = isset($_GET['y']) ? (float)$_GET['y'] : 0;

// 2. Operaciones (ojo con dividir entre 0)
$resultados = [
    'Suma'           => $x + $y,
    'Resto'          => $x - $y,
    'Multiplicación' => $x * $y,
    'División'       => ($y != 0) ? $x / $y : 'No se puede dividir entre 0',
];

// 3-6. Datos del servidor para responder a las preguntas
$ordenador   = $_SERVER['REMOTE_ADDR'];        // quién hace la petición
$rutaLocal   = $_SERVER['DOCUMENT_ROOT'];      // ruta física del sitio
$scriptActual = $_SERVER['PHP_SELF'];

// La lógica termina aquí. Todo lo visual se va a otro archivo.
include 'calculadora.view.php';
