<?php
include '../conexion.php';

$numero = $_POST['numero'];

$stmt = $conexion->prepare("INSERT INTO cajones (numero) VALUES (?)");
$stmt->bind_param("s", $numero);

$result = $stmt->execute();

if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();
?>
