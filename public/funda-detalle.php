<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/datos/RepositorioFundas.php';
require_once __DIR__ . '/../src/utilidades/vistas.php';

$repositorio = new RepositorioFundas(__DIR__ . '/../datos/datos.json');
$idSolicitado = (int) filter_var($_GET['id'] ?? '', FILTER_VALIDATE_INT);

$productoEncontrado = true;
try {
    $producto = $repositorio->buscarPorId($idSolicitado);
} catch (OutOfBoundsException $error) {
    $productoEncontrado = false;
    http_response_code(404);
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PhonecaSeSDS - Detalle de Funda</title>
        <link rel="stylesheet" href="assets/css/estilos.css">
    </head>
    <body>
        <header>
            <h1>Bienvenido a PhonecaSeSDS</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="fundas.php" aria-current="page">Catálogo</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <?php if ($productoEncontrado): ?>

                <nav class="migas" aria-label="Ruta de navegación">
                    <ol>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="fundas.php">Catálogo</a></li>
                        <li aria-current="page"><?= escapar($producto->obtenerNombre()) ?></li>
                    </ol>
                </nav>

                <article>
                    <h3><?= escapar($producto->obtenerNombre()) ?></h3>
                    <p>Categoría: <?= escapar($producto->obtenerCategoria()->obtenerNombre()) ?></p>
                    <p>Precio: <?= $producto->obtenerPrecioFormatear() ?></p>

                    <?php mostrarDisponibilidad($producto); ?>
                </article>

            <?php else: ?>

                <h1>Producto no encontrado</h1>
                <p>La funda que buscas no existe o ya no está disponible.</p>
                <a href="fundas.php">Volver al catálogo</a>

            <?php endif; ?>
        </main>

        <footer>
            <p>&copy; 2026 PhonecaSeSDS. Todos los derechos reservados.</p>
        </footer>

    </body>
</html>