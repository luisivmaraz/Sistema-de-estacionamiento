<?php
include '../conexion.php';

$id_servo = $_POST['id_servo'];


$stmt = $conexion->prepare("DELETE FROM servomotor WHERE id_servo='".$id_servo."'");

$result = $stmt->execute();
if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();

?>

