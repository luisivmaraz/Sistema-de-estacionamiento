
<?php
 include 'conexion.php';
$id_cliente= $_POST['id_cliente'];
$query = "SELECT * FROM cliente WHERE id_cliente='".$id_cliente."'";
$ejecutar = $conexion->query($query);
while($result=$ejecutar->fetch_array()){
?>

<script src="scripts/js/funciones.js"></script>
<script src="scripts/js/jquery.min.js"></script>
<div class="row mt-2 px-2 mb-3">
    <div class="col mx-auto my-auto">
        <div class="card">
            <div class="card-body">
            <h3>Usuario No.<b><?php echo $result['id_z']?></b></h3>
<hr>
                <form id="frmClientes" name="frmClientes" method="POST"> <!-- FORM-->
                    <div class="row">
                        <div class="col">
                            <label for="id_vehiculo" class="form-label" required>Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" value="<?php
                            echo $result['nombre'];
                            ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="direccion" class="form-label">Dirección:</label>
                            <input type="text" id="direccion" name="direccion" class="form-control"
                                placeholder="Dirección" value="<?php
                            echo $result['direccion'];
                            ?>" />
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-6">
                            <label for="telefono" class="form-label">Telefono:</label>
                            <input type="tel" id="telefono" name="telefono" class="form-control"
                                placeholder="Telefono movil" value="<?php
                            echo $result['telefono'];
                            ?>" />
                        </div>
                        <div class="col-lg-6">
                            <label for="correo" class="form-label">Correo:</label>
                            <input type="email" id="correo" name="correo" class="form-control"
                                placeholder="Correo electronico" value="<?php
                            echo $result['correo'];
                            ?>"  />
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-lg-6 ">
                             <a href='#' class="btn btn-warning mb-2" onclick="cancelarOperacion();">Cancelar</a>
                            <input class="btn btn-danger mb-2" onclick="modificarCliente(<?php echo $id_cliente;?>);" type="submit" value="Actualizar datos"></input>
                        </div>
                    </div>
                </form>
            </div>    
    
        </div>
    </div>
</div>

<?php }?>