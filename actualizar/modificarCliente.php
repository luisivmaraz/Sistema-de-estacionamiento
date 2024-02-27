<?php
include '../conexion.php';
$id_cliente = $_POST['id_cliente'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$stmt =$conexion->prepare( "UPDATE cliente SET nombre = '".$nombre."', direccion = '".$direccion."', telefono = '".$telefono."', correo = '".$correo."' WHERE id_cliente ='".$id_cliente."'");

$result = $stmt->execute();
if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();

?>