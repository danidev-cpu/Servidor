<?php
function cargar_plantilla($titulo, $contenido)
{
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>

    <body>
        <?php

        if (is_callable($contenido)) {
        ?>

            <body class="d-flex justify-content-center align-items-center min-vh-100 m-0">
                <div class="border border-dark rounded p-3 w-50 text-center">
                    <?php
                    $contenido();
                    ?>
                </div>
            </body>
        <?php
        }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>

    </html>

<?php
}
?>