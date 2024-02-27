<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Usuario</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </thead>
        <tbody>
            <?php
            include 'conexion.php';
            $query="SELECT * FROM empleados";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>  
                <td>".$result['nombre']."</td>
                <td>".$result['direccion']."</td>
                <td>".$result['telefono']."</td>
                <td>".$result['correo']."</td>
                <td>".$result['usuario']."</td>
                <td>".$result['contrasena']."</td>
                <td><a href='#' onclick='actualizarEmpleado(".$result['id_empleado'].")'>Editar</a></td>
                <td><a href='#' onclick='eliminarEmpleado(".$result['id_empleado'].")'>Eliminar</a></td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>