<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <th scope="col">Tarifa</th>
            <th scope="col">Monto</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </thead>
        <tbody>
            <?php
    include 'conexion.php';
            $query="SELECT * FROM tarifa";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>  
                <td>".$result['tarifa']."</td>
                <td>".$result['monto']."</td>
                <td><a href='#' onclick='actualizarTarifa(".$result['id_tarifa'].")'>Editar</a></td>
                <td><a href='#' onclick='eliminarTarifa(".$result['id_tarifa'].")'>Eliminar</a></td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
