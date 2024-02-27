
<?php
 include 'conexion.php';
$id_vehiculo= $_POST['id_vehiculo'];
$query = "SELECT * FROM vehiculos WHERE id_vehiculo='".$id_vehiculo."'";
$ejecutar = $conexion->query($query);
while($result=$ejecutar->fetch_array()){
?>

<script src="scripts/js/funciones.js"></script>
  <script src="scripts/js/jquery.min.js"></script>

<div class="row mt-2 px-5 mb-3">
<div class="col-8 mx-auto my-auto">

<div class="row mt-2 px-2 mb-3">
<div class="col mx-auto my-auto">
        <div class="card">
            <div class="card-body">
                <p>Vehiculos </p>
                <hr>
                <form id="frmVehiculos" name="frmVehiculo" method="post"> <!-- FORM-->

                    <div class="row">
                        <div class="col">
                            <label for="matricula" class="form-label" required>Matricula:</label>
                            <input type="text" id="matricula" name="matricula" class="form-control"
                                placeholder="Matricula"  value="<?php echo $result['matricula'];?>"/>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col">
                        <label for="modelo" class="form-label">Modelo:</label>
                            <input type="number" id="modelo" name="modelo" class="form-control"
                                placeholder="modelo" value="<?php echo $result['modelo'];?>" />
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-4">
                        <label for="color">Selecciona un color:</label>
                    <input type="color" id="color" name="color" class="form-control" value="<?php echo $result['color'];?>">
                        </div>
                        <div class="col-lg-4">
                            <label for="puertas" class="form-label">Puertas:</label>
                            <input type="number" id="puertas" min="0" name="puertas" class="form-control"
                                placeholder="Correo electronico" value="<?php echo $result['puertas'];?>" />
                        </div>
                        <div class="col-lg-4">
                            <label for="tipo" class="form-label">Tipo:</label>
                            <input type="text" id="tipo" name="tipo" class="form-control"
                                placeholder="Tipo" value="<?php echo $result['tipo'];?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="id_cliente" class="form-label" required>Cliente:</label>
                            <select class="form-control" name="id_cliente" id="id_cliente">
                                <option value="<?php echo $result['id_cliente'];?>" select><?php echo $result['matricula'];?></option>
                                <hr>
                                <?php
                                include 'conexion.php';
                                    $query = "SELECT id_cliente, nombre FROM cliente";
                                    $ejecutar = $conexion->query($query);
                                    while($resultado = $ejecutar->fetch_array()){
                                        echo "<option value='".$resultado['id_cliente']."'>".$resultado['nombre']."</option>";
                                    }
                                ?>
                            </select>
                            
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-lg-6 ">
                        <a href='#' class="btn btn-warning mb-2" onclick="cancelarOperacion();">Cancelar</a>
                            <input class="btn btn-danger mb-2" onclick="modificarVehiculo(<?php echo $result['id_vehiculo']?>)" type="button" value="guardar"></input>


                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
<?php };?>