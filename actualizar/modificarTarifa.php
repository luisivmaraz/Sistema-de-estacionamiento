<?php

include '../conexion.php';
$id_tarifa = $_POST['id_tarifa'];
$tarifa = $_POST['tarifa'];
$monto = $_POST['monto'];

$stmt =$conexion->prepare( "UPDATE tarifa SET tarifa = '".$tarifa."', monto = '".$monto."' WHERE id_tarifa ='".$id_tarifa."'");
$result = $stmt->execute();
if ($result) {
    echo "success";
} else {
    echo "error";
}
?>