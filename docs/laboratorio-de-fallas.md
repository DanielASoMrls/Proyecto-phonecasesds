| # | Qué rompes | Cómo | Cómo restauras |
| --- | --- | --- | --- |
| 1 | La ruta del archivo | En `probar-modelos.php`, escribe `datos/dato.json` (sin la `s`) en el `new Repositorio...` | Corrige la ruta |
| 2 | El JSON | En `datos.json`, borra una coma entre dos registros | `git restore datos/datos.json` |
| 3 | Un campo | En `datos.json`, borra la línea `"stock"` completa de un registro | `git restore datos/datos.json` |
| 4 | La búsqueda | Pide `buscarPorId(9999)` **sin** `try/catch` | Vuelve a poner el `try/catch` |
| 5 | Un tipo de dato | En `datos.json`, cambia el precio de un ítem a `"gratis"` (texto) | `git restore datos/datos.json` |