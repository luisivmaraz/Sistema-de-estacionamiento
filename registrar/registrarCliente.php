<?php
include '../conexion.php';

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$stmt = $conexion->prepare("INSERT INTO cliente (nombre, direccion, telefono, correo) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $direccion, $telefono, $correo);

$result = $stmt->execute();

if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();
?>
