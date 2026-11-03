<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/datos/RepositorioFundas.php';

$repositorio = new RepositorioFundas(__DIR__ . '/../datos/datos.json');
$productos = $repositorio->obtenerTodos();

echo '<pre>';
echo 'Registros leidos: ' . count($productos) . "\n";
echo 'Primer nombre: ' . $productos[0]['nombreProducto'] . "\n";
echo '</pre>';