<script src="scripts/js/funciones.js"></script>
<script src="scripts/js/jquery.min.js"></script>
<div class="row mt-2 px-2 mb-3">
    <div class="col mx-auto my-auto">
        <div class="card">
            <div class="card-body">
                <p>Servos</p>
                <hr>
                <form id="frmServo" name="frmServos" method="POST"> <!-- FORM-->
                    <div class="row">
                        <div class="col">
                            <label for="id_servo" class="form-label" required>Descripción</label>
                            <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="descripcion" />
                        </div>



                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="grados" class="form-label">grados:</label>
                            <input type="text" id="grados" name="grados" class="form-control"
                                placeholder="grados" />
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-6">
                            <label for="estatus" class="form-label">estatus:</label>
                            <input type="tel" id="estatus" name="estatus" class="form-control"
                                placeholder="estatus" />
                        </div>
                     
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-lg-6 ">
                            <input class="btn btn-primary mb-2" onclick="registrarServo()" type="button" value="guardar"></input>
                        </div>
                    </div>
                </form>
            </div>    
    
        </div>
    </div>
</div>

<div class="container" id="result">
    <?php
    include './consultarServo.php';
    ?>
</div>
