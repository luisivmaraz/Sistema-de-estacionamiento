<?php
include '../conexion.php';

$id_tarifa = $_POST['id_tarifa'];


$stmt = $conexion->prepare("DELETE FROM tarifa WHERE id_tarifa='".$id_tarifa."'");
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
