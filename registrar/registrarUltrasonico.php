<?php
include '../conexion.php';

$distancia = $_POST['distancia'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$estatus = $_POST['estatus'];

$stmt = $conexion->prepare("INSERT INTO ultrasonico (distancia, fecha, hora, estatus) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $distancia, $fecha, $hora, $estatus);

$result = $stmt->execute();

if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();
?>
