<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <th scope="col">ID Servo</th>
            <th scope="col">Descripción</th>
            <th scope="col">Grados</th>
            <th scope="col">Estatus</th>
            <th scope="col">Actualizar</th>
            <th scope="col">Eliminar</th>
        </thead>
        <tbody>
            <?php
            include 'conexion.php';
            $query = "SELECT * FROM servomotor";
            $ejecutar = $conexion->query($query);
            while ($result = $ejecutar->fetch_array()) {
                echo "<tr>  
                <td>".$result['id_servo']."</td>
                <td>".$result['descripcion']."</td>
                <td>".$result['grados']."</td>
                <td>".$result['estatus']."</td>
                <td><a href='#' onclick='editarServo(".$result['id_servo'].")'>Actualizar</a></td>
                <td><a href='#' onclick='EliminarServo(".$result['id_servo'].")'>Eliminar</a></td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
