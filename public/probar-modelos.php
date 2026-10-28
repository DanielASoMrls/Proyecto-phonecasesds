<?php
declare(strict_types=1);

require_once __DIR__ .'/../src/modelos/Categoria.php';
require_once __DIR__ .'/../src/modelos/Producto.php';

$piel = new Categoria('Piel');
$estampados = new Categoria('Estampados');

echo $piel->obtenerNombre().'<br>';
echo $estampados->obtenerNombre().'<br>-----------------------------<br>';

#$intento =new Producto(1, 'Funda De Piel Modern', new Categoria('Piel'), 999.00,100,'iPhone 16 Pro');

$piel = Producto::desdeArreglo([
    'id'=> 1,
    'nombreProducto'=> 'Funda De Piel Modern',
    'categoria'=> 'Piel',
    'precio'=> 999.00,
    'stock'=> 100,
    'modeloCompatible'=> 'iPhone 16 Pro'
]);

echo $piel->obtenerNombre().'('.$piel->obtenerCategoria()->obtenerNombre().') y cuesta '.$piel->obtenerPrecioFormatear().'<br>';
echo $piel->estaDisponible() ? 'Existe producto' : 'Agotado';
?>