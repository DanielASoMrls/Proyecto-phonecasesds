# Proyecto-phonecasesds

Catálogo de venta de fundas para celular. Proyecto de la asignatura Aplicaciones Web (E-APW-2), grupo 401.

## Vista previa

https://github.com/DanielASoMrls/Proyecto-phonecasesds

## Dominio y entidades

| Entidad del curso | Equivalente en mi proyecto |
|---|---|
| Categoria |Distintos tipos de funda para celular|
| Producto |Funda para celular|
| Cliente / Usuario |Cliente el cual comprará una funda|
| Pedido + DetallePedido |Pedido de compra y detalle de las fundas solicitadas|

## Estructura

Proyecto-phonecasesds/
├── datos/
│   └── datos.json
├── practica-3-1/
│   └── Archivos HTML de prácticas
├── public/
│   ├── assets/
│   │   └── css/
│   │       └── estilos.css
│   ├── contacto.php
│   ├── funda-detalle.php
│   ├── fundas.php
│   ├── index.php
│   └── subir-producto.php
├── .gitignore
└── README.md

## Estado

Unidad II (front end) completa. Siguiente: Unidad III (back end en PHP).

## Bitácora U2S06
El proyecto consiste en un catálogo de fundas para celular con una interfaz sencilla, clara y fácil de utilizar.

Se identifican las entidades Categoría, Producto, Cliente y Pedido para organizar la información de la tienda.

La siguiente etapa consiste en desarrollar el back end con PHP para gestionar los productos y las operaciones de la tienda.

## Cómo ejecutar el proyecto

1. Abrir el proyecto en GitHub Codespaces.
2. Abrir la terminal de VS Code.
3. Ejecutar el siguiente comando para iniciar el servidor PHP:

php -S localhost:8000 -t public

4. Una vez iniciado el servidor, abrir la pestaña **Ports** de Codespaces.
5. Buscar el puerto `8000` y seleccionar **Open in Browser**.
6. Para acceder al catálogo, abrir la ruta `fundas.php`.

**Nota:** Mantener la terminal abierta mientras se utiliza el servidor. Para detenerlo, presionar `Ctrl + C`.

1. Si el precio de un ítem cambia, ¿qué archivo editas hoy y qué habría pasado antes de esta sesión?
Actualmente editaría el archivo datos/datos.json, porque ahí se almacena la información de cada funda, incluyendo su precio. Antes de esta sesión, la información podía estar escrita directamente en el código de las páginas, por lo que habría tenido que buscar y modificar el precio manualmente en diferentes partes de mi proyecto.

2. ¿Por qué tu clase usa propiedades privadas y métodos en lugar de pasar el arreglo del JSON directo a la vista?
Porque permite proteger los datos del producto y controlar cómo se accede a ellos mediante métodos. Además, facilita la organización del código.

3. En tu `datos.json`, el nombre de la categoría se repite como texto en cada ítem. ¿Qué problemas puede causar esa repetición cuando haya cientos de ítems?
Puede provocar inconsistencias y errores si el nombre de una categoría cambia, porque habría que modificarlo en muchos productos, pero también genera información repetida y dificulta el mantenimiento de los datos.