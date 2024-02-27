<?php
include '../conexion.php';

$descripcion = $_POST['descripcion'];
$grados = $_POST['grados'];
$estatus = $_POST['estatus'];

$stmt = $conexion->prepare("INSERT INTO servomotor (descripcion, grados, estatus) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $descripcion, $grados, $estatus);

$result = $stmt->execute();

if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();
?>
