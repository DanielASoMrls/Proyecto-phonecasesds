<?php
declare(strict_types = 1);

require_once __DIR__ .'/Categoria.php';

class Producto{
    private const CAMPOS_OBLIGATORIOS = [
        'id','nombreProducto','categoria','precio','stock','modeloCompatible',
    ];

    private int $id;
    private string $nombreProducto;
    private Categoria $categoria;
    private float $precio;
    private int $stock;
    private string $modeloCompatible;

    private function __construct(
        int $id,
        string $nombreProducto,
        Categoria $categoria,
        float $precio,
        int $stock,
        string $modeloCompatible
    ){
        $this->id = $id;
        $this->nombreProducto = $nombreProducto;
        $this->categoria = $categoria;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->modeloCompatible = $modeloCompatible;
    }

    private static function exigirCampos(array $registro):void{
        foreach(self::CAMPOS_OBLIGATORIOS as $campo){
            if(!array_key_exists($campo,$registro)){
                throw new InvalidArgumentException("El producto no tiene el campo".$campo);
            }
        }
    }

    public static function desdeArreglo(array $registro): Producto{
        self::exigirCampos($registro);

        return new Producto(
            (int) $registro['id'],
            (string) $registro['nombreProducto'],
            new Categoria((string) $registro['categoria']),
            (float) $registro['precio'],
            (int) $registro['stock'],
            (string) $registro['modeloCompatible']
        );
    }

    public function obtenerId(): int{
        return $this->id;
    }

    public function obtenerNombre(): string{
        return $this->nombreProducto;
    }

    public function obtenerCategoria(): Categoria{
        return $this->categoria;
    }
    
    public function obtenerPrecio(): float{
        return $this->precio;
    }
    
    public function obtenerStock(): int{
        return $this->stock;
    }

    public function obtenermodeloCompatible(): string{
        return $this->modeloCompatible;
    }

    public function estaDisponible(): bool{
        return $this->stock > 0;
    }

    public function obtenerPrecioFormatear(): string{
        return '$'.number_format($this->precio,2);
    }
}


?>