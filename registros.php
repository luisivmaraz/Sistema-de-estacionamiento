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
                                <option value="" select>- SELECCIONA -</option>
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
                            <label for="id_cajon" class="form-label" required>Cajon :</label>
                            <select class="form-control" name="id_cajon" id="id_cajon">
                                <option value="" select>- SELECCIONA -</option>
                                <?php
                                include 'conexion.php';
                                    $query = "SELECT id_cajon, numero FROM cajones WHERE estatus = 0" ;
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
                                <option value="" select>- SELECCIONA -</option>
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
                            <input class="btn btn-primary mb-2" onclick="registrarRegistro();" type="button" value="Guardar"></input>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>


    <div class="container" id="result">
    <?php
    include './consultarRegistros.php'
    ?>
</div>