<?php
include '../conexion.php';
$id_vehiculo = $_POST['id_vehiculo'];
$matricula = $_POST['matricula'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$puertas = $_POST['puertas'];
$tipo = $_POST['tipo'];
$id_cliente = $_POST['id_cliente'];

$stmt =$conexion->prepare( "UPDATE vehiculos SET matricula = '".$matricula."', modelo = '".$modelo."', color = '".$color."', puertas = '".$puertas."', tipo = '".$tipo."', id_cliente = '".$id_cliente."' WHERE id_vehiculo ='".$id_vehiculo."'");

$result = $stmt->execute();
if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();

?>