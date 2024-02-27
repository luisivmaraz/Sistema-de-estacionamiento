<?php
include '../conexion.php';

$matricula = $_POST['matricula'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$puertas = $_POST['puertas'];
$tipo = $_POST['tipo'];
$id_cliente = $_POST['id_cliente'];

$stmt = $conexion->prepare("INSERT INTO vehiculos (matricula, modelo, color, puertas, tipo, id_cliente) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $matricula, $modelo, $color, $puertas, $tipo, $id_cliente);

$result = $stmt->execute();

if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();
?>
