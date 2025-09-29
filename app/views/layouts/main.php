<?php
$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/') ?: '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación MVC</title>
    <link rel="stylesheet" href="<?= $basePath ?>/assets/css/styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="<?= $basePath ?>/index.php?controller=home&action=index">Inicio</a></li>
            <li><a href="<?= $basePath ?>/index.php?controller=home&action=about">Nosotros</a></li>
            <li><a href="<?= $basePath ?>/index.php?controller=home&action=services">Servicios</a></li>
            <li><a href="<?= $basePath ?>/index.php?controller=home&action=contact">Contacto</a></li>
        </ul>
    </nav>
    <main>
        <?= $content ?? '' ?>
    </main>
</body>
</html>
