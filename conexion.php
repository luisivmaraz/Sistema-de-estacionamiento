<?php
    
    // Variables de conexión con el servidor
    $DATABASE_HOST = 'localhost';      // Servidor
    $DATABASE_USER = 'root';           // Usuario
    $DATABASE_PASS = '';               // Contraseña
    $DATABASE_NAME = 'estacionamiento'; // Nombre de la base
    $DATABASE_PORT = '3306';           // Puerto

    // Conexión con la base de datos
    $conexion = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);  // Conexión MariaDB
    if (mysqli_connect_error()) {
        exit('Error de conexión con MySQL: ' . mysqli_connect_error());
    } else {

    }
?>
