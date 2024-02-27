<?php
include "conexion.php";
$ocupado=$_GET["ocupado"];
$cajon=$_GET["cajon"];

if($ocupado==1){
    $query ="UPDATE cajones SET ocupado='".$ocupado."' WHERE numero='".$cajon."'";
    if($datos=mysqli_query($conexion, $query)){
        echo "Hay un vehiculo en el cajon.".$cajon;
    }
} else {
    $query ="UPDATE cajones SET ocupado='".$ocupado."' WHERE numero='".$cajon."'";
    if($datos=mysqli_query($conexion, $query)){
        echo "No hay vehiculo.".$cajon;
    }
}

?>