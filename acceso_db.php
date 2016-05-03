<?php
    $host_db = 'localhost'; // Host de la BD
    $usuario_db = 'gypnetwo_admin'; // Usuario de la BD
    $clave_db = 'k6yF7vc5l(3y'; // Contraseña de la BD
    $nombre_db = 'gypnetwo_gypnetwork'; // Nombre de la BD
     
    //conectamos y seleccionamos db
    mysql_connect($host_db, $usuario_db, $clave_db);
    mysql_select_db($nombre_db);
?> 