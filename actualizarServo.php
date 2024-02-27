
<?php
 include 'conexion.php';
$id_servo= $_POST['id_servo'];
$query = "SELECT * FROM servomotor WHERE id_servo='".$id_servo."'";
$ejecutar = $conexion->query($query);
while($result=$ejecutar->fetch_array()){
?>

<script src="scripts/js/funciones.js"></script>
<script src="scripts/js/jquery.min.js"></script>
<div class="row mt-2 px-2 mb-3">
    <div class="col mx-auto my-auto">
        <div class="card">
            <div class="card-body">
            <h3>Servo No.<b><?php echo $result['id_servo']?></b></h3>
<hr>
                <form id="frmServomotor" name="frmServomotor" method="POST"> <!-- FORM-->

                    <div class="row">
                        <div class="col">
                            <label for="descripcion" class="form-label">descripcion:</label>
                            <input type="text" id="descripcion" name="descripcion" class="form-control"
                                placeholder="descripcion" value="<?php
                            echo $result['descripcion'];
                            ?>" />
                        </div>

                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-6">
                            <label for="grados" class="form-label">grados:</label>
                            <input type="number" id="grados" name="grados" class="form-control"
                                placeholder="grados" value="<?php
                            echo $result['grados'];
                            ?>" />
                        </div>


                        <div class="row mb-2">
                        <div class="col-lg-6">
                            <label for="estatus" class="form-label">estatus:</label>
                            <input type="text" id="estatus" name="estatus" class="form-control"
                                placeholder="estatus" value="<?php
                            echo $result['estatus'];
                            ?>" />
                        </div>

                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-lg-6 ">
                             <a href='#' class="btn btn-warning mb-2" onclick="cancelarOperacion();">Cancelar</a>
                            <input class="btn btn-danger mb-2" onclick="modificarServo(<?php echo $id_servo;?>);" type="submit" value="Actualizar datos"></input>
                        </div>
                    </div>
                </form>
            </div>    
    
        </div>
    </div>
</div>

<?php }?>