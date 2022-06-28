Para un correcto funcionamiento:

1. Crear un usuario en phpmyadmin con
	Nombre de usuario: Cursitos
	Contraseña: cursitos
	Nombre de host: Local
	Todos los privilegios
   o crear otro usuario y cambiar los campos en configuraciones/conexion.php
2. Crear una base de datos de nombre cursitos y utf8_spanish_ci o crear una base de datos con otro nombre y cambiar en configuraciones/conexion.php
3. Dentro de la base de datos ejecutrar el script de "Basesdedatos.txt" en la pestaña SQL (Desarrollado sobre la versión de MySQL 8.0.27)
	- Algunos check sacan avisos en phpmyadmin cuando se copia el script, sin embargo, este se ejecuta sin problema y funcionan correctamente.
4. Ejecutar desde localhost/cursitos
