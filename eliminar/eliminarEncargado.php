<?php
include '../conexion.php';

$id_empleado = $_POST['id_empleado'];

$stmt = $conexion->prepare("DELETE FROM empleados WHERE id_empleado='".$id_empleado."'");
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
