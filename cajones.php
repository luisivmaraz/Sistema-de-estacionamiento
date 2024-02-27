<div class="row mt-2 px-2">
    <div class="col mx-auto my-auto"> <!-- Ajusta la clase col-4 según tus necesidades -->
        <div class="card">
            <div class="card-body">
            <p>Cajones</p>
                <hr>
                <form action="" method="post"> <!-- FORM-->
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="numero" class="form-label" required>N.Cajon :</label>
                            <input type="number" id="numero" name="numero" min="1" class="form-control"
                                placeholder="Numero de cajon" />
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <input class="btn btn-primary mb-2" onclick="registrarCajon()" value="Guardar" type ="button"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container" id="result">
    <?php
    include './consultarCajon.php'
    ?>
</div>