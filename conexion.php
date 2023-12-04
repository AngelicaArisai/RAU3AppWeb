<?php
// Definimos las credenciales de la base de datos
$servername = "localhost"; // servidor de la base de datos
$usuario = "root"; // usuario de la base de datos
$contrasena = ""; // contraseña de la base de datos
$dbname = "drivex"; // nombre de la base de datos

// Creamos la conexión a la base de datos utilizando la función mysqli_conexionect
$conexion = mysqli_connect($servername, $usuario, $contrasena, $dbname);

// Verificamos si la conexión fue exitosa
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error()); // Si la conexión falla, se muestra un mensaje de error y se termina la ejecución del script
}

// Cerramos la conexión a la base de datos utilizando la función mysqli_close
//mysqli_close($conexion);
?>