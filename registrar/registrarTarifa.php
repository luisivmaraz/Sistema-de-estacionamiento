<?php
include '../conexion.php';

$tarifa = $_POST['tarifa'];
$monto = $_POST['monto'];

$stmt = $conexion->prepare("INSERT INTO tarifa (tarifa, monto) VALUES (?, ?)");
$stmt->bind_param("ss", $tarifa, $monto);

$result = $stmt->execute();

if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();
?>
