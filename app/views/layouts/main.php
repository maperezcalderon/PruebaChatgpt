<?php
/** @var string $contentView */
/** @var string|null $titulo */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($titulo) ? htmlspecialchars($titulo) . ' | ' : '' ?>Demo MVC</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script defer src="/assets/js/app.js"></script>
</head>
<body>
    <header class="main-header">
        <h1>Demo MVC en PHP</h1>
        <p>Un ejemplo sencillo con menú lateral.</p>
    </header>
    <div class="layout">
        <nav class="sidebar" aria-label="Menú lateral">
            <ul>
                <li><a href="/?controller=home&action=inicio" data-action="inicio">Inicio</a></li>
                <li><a href="/?controller=home&action=servicios" data-action="servicios">Servicios</a></li>
                <li><a href="/?controller=home&action=contacto" data-action="contacto">Contacto</a></li>
            </ul>
        </nav>
        <main class="content" id="contenido-principal">
            <?php require $contentView; ?>
        </main>
    </div>
    <footer class="main-footer">
        <small>&copy; <?= date('Y'); ?> Mi Empresa. Todos los derechos reservados.</small>
    </footer>
</body>
</html>
