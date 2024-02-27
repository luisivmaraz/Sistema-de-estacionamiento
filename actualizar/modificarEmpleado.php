<?php
include '../conexion.php';

$id_empleado = $_POST['id_empleado'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$stmt =$conexion->prepare( "UPDATE empleados SET nombre = '".$nombre."', direccion = '".$direccion."', telefono = '".$telefono."', correo = '".$correo."',  usuario = '".$usuario."',  contrasena = '".$contrasena."' WHERE id_empleado ='".$id_empleado."'");

$result = $stmt->execute();
if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();

?>