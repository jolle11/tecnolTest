# Backend PHP Junior Developer Test

## **Commit 1 - Let's go! 🎢**

En el commit 1 se ha hecho lo siguiente:

-   Se ha iniciado un repositorio en github creando el readme.md al mismo tiempo.
-   Se ha creado la estructura de carpetas para una aplicación MVC (Model View Controller).
-   Se ha creado un index.php que es el archivo que engloba todo el conjunto de nuestra aplicación para ser representada por el navegador.
-   Dentro de la carpeta Controllers se ha creado el archivo app controller, que como bien dice el nombre, controla la interacción entre los modelos y las vistas.
-   Se ha creado la carpeta DB y el archivo db.php para conectar nuestra aplicación con la base de datos (que vamos a crear en el commit 4).
-   Dentro de la carpeta Models se han creado un header.php (dentro del header se ha incluido la hoja de estilos de la librería Bootstrap para la parte de front) y un footer.php que serán usados una sola vez en el index.php, ya que son comunes en toda nuestra aplicación.

## **Commit 2 - Winter is coming! 🥶**

En el commit 2 se ha hecho lo siguiente:

-   Se han generado los modelos para cada una de las entidades especificadas y se han declarado sus atributos (para ser usados en un posterior CRUD).

## **Commit 3 - Relationships are important for us 👫**

En el commit 3 se ha hecho lo siguiente:

-   Se ha creado un diagrama entidad relación (DER) y un diagrama relacional (Tablas).

**Ambos se pueden encontrar dentro de la carpeta DB, ya que son el paso previo a la creación de una base de datos.**

## **Commit 4 - May the force be with you 💪**

En el commit 4 se ha hecho lo siguiente:

-   Se ha generado la base de datos acorde al modelo creado en el commit 3.
-   Se han insertado 3 categorías de productos.
-   Se han insertado 2 productos para cada categoría.
-   Se han insertado 2 reviews para cada producto.

**El script para la creación e inserción de datos en nuestra base de datos se encuentra en la carpeta DB. Este se encuentra en formato .sql y en formato .tst por si hubiera problemas de incompatibilidad (no debería).**

## **Commit 5 - MVC 👀**

En el commit 5 se ha hecho lo siguiente:

-   Se han finalizado los modelos con su constructor y su funcion get para traer datos de la base de datos.
-   Se han creado las vistas para las diferentes tablas dandoles estilos de Bootstrap.
-   Se ha actualizado el controlador para que haga la interaccion entre los diferentes modelos y vistas.
-   Se ha actualizado el index.php anadiendole el header, el controlador, el script para las animaciones de Bootstrap y el footer.

Sin exito:

-   No se ha podido hacer CREATE.
-   No se ha podido hacer UPDATE.
-   No se ha podido hacer DELETE.

## **Commit 6 - Get my money! 💸**

No se ha podido generar la ruta API que se pedia en este commit.
