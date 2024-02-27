<?php
include '../conexion.php';
$id_servo = $_POST['id_servo'];
$descripcion = $_POST['descripcion'];
$grados = $_POST['grados'];
$estatus = $_POST['estatus'];

$stmt = $conexion->prepare("UPDATE servomotor SET descripcion=?, grados=?, estatus=? WHERE id_servo=?");
$stmt->bind_param("sisi", $descripcion, $grados, $estatus, $id_servo);

$result = $stmt->execute();
if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();

?>