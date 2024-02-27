<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <th scope="col">Matricula</th>
            <th scope="col">Modelo</th>
            <th scope="col">Color</th>
            <th scope="col">Puertas</th>
            <th scope="col">Tipo</th>
            <th scope="col">Cliente</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </thead>
        <tbody>
            <?php
            include 'conexion.php';
            $query="SELECT * FROM vehiculos";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>  
                <td>".$result['matricula']."</td>
                <td>".$result['modelo']."</td>
                <td style='background-color:".$result['color']."'></td>
                <td>".$result['puertas']."</td>
                <td>".$result['tipo']."</td>
                <td>".$result['id_cliente']."</td>
                <td><a href='#' onclick='actualizarVehiculo(".$result['id_vehiculo'].")'>Editar</a></td>
                <td><a href='#' onclick='eliminarVehiculo(".$result['id_vehiculo'].")'>Eliminar</a></td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>