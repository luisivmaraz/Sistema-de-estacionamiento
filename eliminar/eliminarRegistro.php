<?php
include '../conexion.php';

$id_registro = $_POST['id_registro'];

$stmt = $conexion->prepare("DELETE FROM registro WHERE id_registro='".$id_registro."'");
// $stmt->bind_param("ss", $tarifa, $monto);
$stmt2 = $conexion->prepare ("UPDATE cajones SET estatus = 0 WHERE id_cajon = (SELECT id_cajon FROM registro WHERE id_registro = '".$id_registro."')");
$result2 = $stmt2->execute();
$result = $stmt->execute();
if ($result && $result2) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();

?>
