
<?php
include 'conexion.php';
$id_registro= $_POST['id_registro'];
$query = "SELECT * FROM registro     WHERE id_registro='".$id_registro."'";
$ejecutar = $conexion->query($query);
while($result=$ejecutar->fetch_array()){
?>

<div class="row mt-2 px-2 mb-3">
<div class="col mx-auto my-auto">
        <div class="card">
            <div class="card-body">
                <p>Registro</p>
                <hr>
                <form action="" method="post"> <!-- FORM-->

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="id_vehiculo" class="form-label" required>Vehiculo:</label>
                            <select class="form-control" name="id_vehiculo" id="id_vehiculo">
                            <option value="<?php echo $result['id_vehiculo']?>" ><?php echo $result['id_vehiculo']?></option>

                                <?php
                                include 'conexion.php';
                                    $query = "SELECT id_vehiculo, matricula FROM vehiculos";
                                    $ejecutar = $conexion->query($query);
                                    while($resultado = $ejecutar->fetch_array()){
                                        echo "<option value='".$resultado['id_vehiculo']."'>".$resultado['matricula']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="id_cajon" class="form-label" >Cajon :</label>
                            <select class="form-control" name="id_cajon" id="id_cajon">
                            <option value="<?php echo $result['id_cajon']?>"><?php echo $result['id_cajon']?></option>
                                <?php
                                include 'conexion.php';
                                    $query = "SELECT id_cajon, numero FROM cajones";
                                    $ejecutar = $conexion->query($query);
                                    while($resultado = $ejecutar->fetch_array()){
                                        echo "<option value='".$resultado['id_cajon']."'>".$resultado['numero']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                            <label for="id_tarifa" class="form-label" required>Tarifa:</label>
                            <select class="form-control" name="id_tarifa" id="id_tarifa">
                                <option value="<?php echo $result['id_tarifa']?>" select><?php echo $result['id_tarifa']?></option>
                                <?php
                                include 'conexion.php';
                                    $query = "SELECT id_tarifa, tarifa FROM tarifa";
                                    $ejecutar = $conexion->query($query);
                                    while($resultado = $ejecutar->fetch_array()){
                                        echo "<option value='".$resultado['id_tarifa']."'>".$resultado['tarifa']."</option>";
                                    }
                                ?>
                            </select>
                        </div>

                    </div>
                    <br>

                    <div class="row ">
                        <div class="col-lg-6 ">
                        <a href='#' class="btn btn-warning mb-2" onclick="cancelarOperacion();">Cancelar</a>
                            <input class="btn btn-danger mb-2" onclick="modificarRegistro(<?php echo $id_registro;?>);" type="submit" value="Actualizar datos"></input>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>

    <?php };?>