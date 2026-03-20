<?php
$conexion = mysqli_connect("localhost", "root", "", "mi_base_de_datos");

if (!$conexion) {
    die("Error de conexión");
}

// Recibir datos
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$edad = $_POST['edad'];
$fecha = $_POST['fecha'];
$contraseña = $_POST['contraseña'];

// Insertar datos
$sql = "INSERT INTO usuarios (nombre, apellido, correo, telefono, direccion, ciudad, edad, fecha, contraseña) 
VALUES ('$nombre','$apellido','$correo','$telefono','$direccion','$ciudad','$edad','$fecha','$contraseña')";

mysqli_query($conexion, $sql);

echo "Datos guardados correctamente";
?>
