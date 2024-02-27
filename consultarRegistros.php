<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <th scope="col">registro</th>
            <th scope="col">vehiculo</th>
            <th scope="col">cajon</th>
            <th scope="col">fechade ingreso</th>
            <th scope="col">hora de ingreso</th>
            <th scope="col">fecha de salida</th>
            <th scope="col">hora de salida</th>
            <th scope="col">Empleado</th>
            <th scope="col">Tarifa</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </thead>
        <tbody>
            <?php
            include 'conexion.php';

            $query="SELECT * FROM registro";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>  
                <td>".$result['id_registro']."</td>
                <td>".$result['id_vehiculo']."</td>
                <td>".$result['id_cajon']."</td>
                <td>".$result['fechaIngreso']."</td>
                <td>".$result['horaIngreso']."</td>
                <td>".$result['fechaSalidad']."</td>
                <td>".$result['horaSalida']."</td>
                <td>".$result['id_empleado']."</td>
                <td>".$result['id_tarifa']."</td>
                <td><a href='#' onclick='actualizarRegistro(".$result['id_registro'].")'>Actualizar</a></td>
                <td><a href='#' onclick='eliminarRegistro(".$result['id_registro'].")'>Eliminar</a></td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>