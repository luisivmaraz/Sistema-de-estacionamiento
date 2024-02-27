<?php
include '../conexion.php';

$id_cajon = $_POST['id_cajon'];
$stmt = $conexion->prepare("DELETE FROM cajones WHERE id_cajon='".$id_cajon."'");

$result = $stmt->execute();
if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();

?>
