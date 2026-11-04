<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/datos/RepositorioFundas.php';
require_once __DIR__ . '/../src/utilidades/vistas.php';

$repositorio = new RepositorioFundas(__DIR__ . '/../datos/datos.json');
$productos = $repositorio->obtenerTodos();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PhonecaSeSDS - Contacto</title>
        <link rel="stylesheet" href="assets/css/estilos.css">
    </head>
    <body>
        <header>
            <h1>Bienvenido a PhonecaSeSDS</h1>
            <nav aria-label="Principal">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="fundas.php">Catálogo</a></li>
                    <li><a href="contacto.php" aria-current="page">Contacto</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section>
                <h2>Contacto</h2>
                <p>¿Tienes alguna pregunta sobre nuestras fundas? ¡Contáctanos!</p>
            </section>
        </main>

        <footer>
            <p>&copy; 2026 PhonecaSeSDS. Todos los derechos reservados.</p>
        </footer>

    </body>
</html>