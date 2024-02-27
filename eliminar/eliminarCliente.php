<?php
include '../conexion.php';

$id_cliente = $_POST['id_cliente'];


$stmt = $conexion->prepare("DELETE FROM cliente WHERE id_cliente='".$id_cliente."'");

$result = $stmt->execute();
if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();

?>

