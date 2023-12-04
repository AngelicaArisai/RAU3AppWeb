<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require 'conexion.php';

// Validamos que el formulario y que el boton registro haya sido presionado
if(isset($_POST['registro'])) {

// Obtener los valores enviados por el formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido_user'];
$direccion = $_POST['direccion_user'];
$correo = $_POST['correo_user'];
$contrasena = $_POST['contrasena_user'];
$usuario = $_POST['nombre_user'];
$telefono = $_POST['telefono_user'];

// Insertamos los datos en la base de datos
$sql = "INSERT INTO usuarios (id, nombre, apellido_user, direccion_user, correo_user, contrasena_user, nombre_user, telefono_user) VALUES (null, '$nombre', '$apellido', '$direccion', '$correo', '$contrasena', '$usuario', '$telefono' )";
$resultado = mysqli_query($conexion,$sql);
	if($resultado) {
		// Iserción correcta
		echo "¡Se insertaron los datos correctamente!";
	} else {
		// Iserción fallida
		echo "¡No se puede insertar la informacion!"."<br>";
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
	}
}
?>