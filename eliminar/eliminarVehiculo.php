<?php
include '../conexion.php';

$id_vehiculo = $_POST['id_vehiculo'];


$stmt = $conexion->prepare("DELETE FROM vehiculos WHERE id_vehiculo='".$id_vehiculo."'");
// $stmt->bind_param("ss", $tarifa, $monto);
$result = $stmt->execute();
if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();

?>

