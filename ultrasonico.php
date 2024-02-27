<script src="scripts/js/funciones.js"></script>
<script src="scripts/js/jquery.min.js"></script>
<div class="row mt-2 px-2 mb-3">
    <div class="col mx-auto my-auto">
        <div class="card">
            <div class="card-body">
                <p>Ultrasonico</p>
                <hr>
                <form id="frmUltra" name="frmUltra" method="POST"> <!-- FORM-->
                    <div class="row">
                        <div class="col">
                            <label for="id_ultrasonico" class="form-label" required>Distancia:</label>
                            <input type="text" id="distancia" name="distancia" class="form-control" placeholder="distancia" />
                        </div>



                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="fecha" class="form-label">Fecha:</label>
                            <input type="date" id="fecha" name="fecha" class="form-control"
                                placeholder="fecha" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="hora" class="form-label">Hora:</label>
                            <input type="time" id="hora" name="hora" class="form-control"
                                placeholder="hora" />
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-6">
                            <label for="estatus" class="form-label">Estatus:</label>
                            <input type="tel" id="estatus" name="estatus" class="form-control"
                                placeholder="estatus" />
                        </div>
                     
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-lg-6 ">
                            <input class="btn btn-primary mb-2" onclick="registrarUltrasonico()" type="button" value="guardar"></input>
                        </div>
                    </div>
                </form>
            </div>    
    
        </div>
    </div>
</div>

<div class="container" id="result">
    <?php
    include './consultarUltrasonico.php';
    ?>
</div>
