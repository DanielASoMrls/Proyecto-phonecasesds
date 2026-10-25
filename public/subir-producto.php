<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PhonecaSeSDS - Agregar Funda</title>
        <link rel="stylesheet" href="assets/css/estilos.css">
    </head>
    <body>
        <header>
            <h1>Bienvenido a PhonecaSeSDS</h1>
            <nav aria-label="Principal">
                <a href="index.php">Inicio</a>
                <a href="fundas.php">Catálogo</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </header>

        <main>
            <section>
                <h2>Agregar Nueva Funda</h2>
                <form action="#" method="post">
                    <div class="campo">
                        <label for="nombreProducto">Nombre del producto:</label>
                        <input type="text" name="nombreProducto" id="nombreProducto" required>
                    </div>
                    <br>
                    <div class="campo">
                        <label for="categoria">Categoría:</label>
                        <input type="text" name="categoria" id="categoria" required>
                    </div>
                    <br>
                    <div class="campo">
                        <label for="precio">Precio:</label>
                        <input type="number" name="precio" id="precio" step="0.01" min="0" required>
                    </div>
                    <br>
                    <div class="campo">
                        <label for="stock">Stock:</label>
                        <input type="number" name="stock" id="stock" min="0" max="999" required aria-describeby="ayudaStock">
                        <p class="ayuda-campo" id="ayudaStock">Piezas disponibles, entre 0 y 999</p>
                        <p class="error-campo" id="errorStock">Escribe un número entero entre 0 y 999</p>
                    </div>
                    <br>
                    <div class="campo">
                        <label for="modeloCompatible">Modelo compatible:</label>
                        <input type="text" name="modeloCompatible" id="modeloCompatible">
                    </div>
                    <br>
                    
                    <button type="submit" class="boton-agregar">Agregar Funda</button>
                </form>
            </section>
        </main>

        <footer>
            <p>&copy; 2026 PhonecaSeSDS. Todos los derechos reservados.</p>
        </footer>

    </body>
</html>