
<?php
 include 'conexion.php';
$id_tarifa= $_POST['id_tarifa'];
$query = "SELECT * FROM tarifa WHERE id_tarifa='".$id_tarifa."'";
$ejecutar = $conexion->query($query);
while($result=$ejecutar->fetch_array()){
?>
<div class="row mt-2 px-2">
    <div class="col-10 mx-auto my-auto"> <!-- Ajusta la clase col-4 según tus necesidades -->
        <div class="card">
            <div class="card-body">
            <p>Tarifas</p>
                <hr>
                <form action="" method="post"> <!-- FORM-->
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="tarifa" class="form-label" required>Tarifa:</label>
                            <input type="text" class="form-control" name="tarifa" id="tarifa" placeholder="tarifa" value="<?php echo $result['tarifa']?>">
                        </div>
                        <div class="col-lg-12">
                            <label for="monto" class="form-label">Monto</label>
                            <input type="text" class="form-control" name="monto" id="monto" placeholder="monto" value="<?php echo $result['monto']?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                        <a href='#' class="btn btn-warning mb-2" onclick="cancelarOperacion();">Cancelar</a>
                            <input class="btn btn-danger mb-2" value="Actualizar" onclick="modificarTarifa(<?php echo $result['id_tarifa']?>)" type="button"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php };?>