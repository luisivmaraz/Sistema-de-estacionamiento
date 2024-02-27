
<?php
 include 'conexion.php';
$id_empleado= $_POST['id_empleado'];
$query = "SELECT * FROM empleados WHERE id_empleado='".$id_empleado."'";
$ejecutar = $conexion->query($query);
while($result=$ejecutar->fetch_array()){
?>


<div class="row mt-2 px-2 mb-3">
<div class="col  mx-auto my-auto">
        <div class="card">
            <div class="card-body">
                <p>Encargados </p>
                <hr>
                <form action="" method="post"> <!-- FORM-->

                    <div class="row">
                        <div class="col">
                            <label for="nombre" class="form-label" required>Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control"
                                placeholder="Nombre" value="<?php echo $result['nombre'];?>"/>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col">
                        <label for="direccion" class="form-label">Dirección:</label>
                            <input type="text" id="direccion" name="direccion" class="form-control"
                                placeholder="Dirección" value="<?php echo $result['direccion'];?>" />
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-6">
                            <label for="telefono" class="form-label">Telefono:</label>
                            <input type="text" id="telefono" name="telefono" class="form-control"
                                placeholder="Telefono movil" value="<?php echo $result['telefono'];?>"/>
                        </div>
                        <div class="col-lg-6">
                            <label for="correo" class="form-label">Correo:</label>
                            <input type="email" id="correo" name="correo" class="form-control"
                                placeholder="Correo electronico" value="<?php echo $result['correo'];?>"/>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-6">
                            <label for="usuario" class="form-label">Usuario:</label>
                            <input type="text" id="usuario" name="usuario" class="form-control"
                                placeholder="Telefono movil" value="<?php echo $result['usuario'];?>" />
                        </div>
                        <div class="col-lg-6">
                            <label for="contrasena" class="form-label">Contraseña:</label>
                            <input type="password" id="contrasena" name="contrasena" class="form-control"
                                placeholder="*******" value="<?php echo $result['contrasena'];?>"/>
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-lg-6 ">
                        <a href='#' class="btn btn-warning mb-2" onclick="cancelarOperacion();">Cancelar</a>
                            <input class="btn btn-danger mb-2" value="guardar" type="submit" onclick="modificarEmpleado(<?php echo $id_empleado?>)"></input>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
<?php };?>