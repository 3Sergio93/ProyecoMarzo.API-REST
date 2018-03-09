# ProyecoMarzo.API-REST

Proyecto final Sergio Silva Ramirez
API REST sobre videojuegos:

En primer lugar para realizar nuestra actividad debemos descargar Codeigniter
en su pagina oficial.

Luego de hacer un git clone del repositorio de Chriskacerguis, concretamente
de Codeginter-rest server.

Nos movemos a la carpeta /var/www/, donde descomprimiremos codeigniter comprimido.

Ahora copiamos todo lo relacionado con codeigniter-rest server a la carpeta
que nos crea codeigniter.

A partir de ahora nos centraremos en una serie de archivos:
/codeigniter/application/config/database.php (Ver archivo)

A partir de ahora descargaremos:
- mysql-server y mysql-client
-apache
-php
-php-mysql
-libapache2-mod-php

Una vez que descargamos todo lo anterior procedemos a configurar el archivo routes.php,
que lo encontramos en /codeigniter/application/config/routes.php (ver archivo).

Crearemos ua base de datos, la cual se llamara videojuego, y le
crearemos los campos id,categoria y nombre.

Controlador:
Ahora debemos de crear el controlador, que se llamara Videojuego.php
y lo encontraremos en /codeigniter/application/controller/Videojuego.php (ver archivo)

Modelo:

Tambien crearemos el modelo, se llamara Videojuego_model.php.
Lo encontramos en /codeigniter/application/models/Videojuego_model.php(ver archivo)

Ahora ya podemos insertar nuestras filas para hacer la prueba en el navegador.
Podemos hacerlo a traves de mysql o a traves de metodo POST.
Ejemplo:

Crear fila:
curl -X POST -H "Content-Type: application/json" -d '{"categoria":"moba","nombre":"LOL"}' http://localhost/codeigniter/index.php/videojuego


Borrar fila:
curl -X DELETE -H "Content-Type: application/json" http://localhost/codeigniter/index.php/videojuego/2


Actualizar fila:
curl -X PUT -H "Content-Type: application/json" -d '{"id":"5","categoria":"aventuras","nombre":"Far Cry"}' http://localhost/codeigniter/index.php/videojuego/1
