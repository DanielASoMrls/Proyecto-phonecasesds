<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PhonecaSeSDS - Agregar Funda</title>
    </head>
    <body>
        <header>
            <h1>Bienvenido a PhonecaSeSDS</h1>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="fundas.php">Catálogo</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </header>

        <main>
            <section>
                <h2>Agregar Nueva Funda</h2>
                <form action="#" method="post">
                    <label for="nombreProducto">Nombre del producto:</label>
                    <input type="text" name="nombreProducto" id="nombreProducto" required>
                    <br>
                    <label for="categoria">Categoría:</label>
                    <input type="text" name="categoria" id="categoria" required>
                    <br>
                    <label for="precio">Precio:</label>
                    <input type="number" name="precio" id="precio" step="0.01" min="0" required>
                    <br>
                    <label for="stock">Stock:</label>
                    <input type="number" name="stock" id="stock" min="0" required>
                    <br>
                    <label for="modeloCompatible">Modelo compatible:</label>
                    <input type="text" name="modeloCompatible" id="modeloCompatible">
                    <br>
                    
                    <button type="submit">Agregar Funda</button>
                </form>
            </section>
        </main>

        <footer>
            <p>&copy; 2026 PhonecaSeSDS. Todos los derechos reservados.</p>
        </footer>

    </body>
</html>