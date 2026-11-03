<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/datos/RepositorioFundas.php';

$repositorio = new RepositorioFundas(__DIR__ . '/../datos/datos.json');
$productos = $repositorio->obtenerTodos();

echo '<pre>';
foreach ($repositorio->obtenerTodos() as $producto) {
    echo $producto->obtenerId() . ' | '
        . $producto->obtenerNombre() . ' | '
        . $producto->obtenerPrecioFormatear() . "\n";
}
echo '</pre>';