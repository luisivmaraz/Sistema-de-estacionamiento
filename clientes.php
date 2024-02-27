<script src="scripts/js/funciones.js"></script>
<script src="scripts/js/jquery.min.js"></script>
<div class="row mt-2 px-2 mb-3">
    <div class="col mx-auto my-auto">
        <div class="card">
            <div class="card-body">
                <p>Clientes</p>
                <hr>
                <form id="frmClientes" name="frmClientes" method="POST"> <!-- FORM-->
                    <div class="row">
                        <div class="col">
                            <label for="id_vehiculo" class="form-label" required>Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="direccion" class="form-label">Dirección:</label>
                            <input type="text" id="direccion" name="direccion" class="form-control"
                                placeholder="Dirección" />
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-6">
                            <label for="telefono" class="form-label">Telefono:</label>
                            <input type="tel" id="telefono" name="telefono" class="form-control"
                                placeholder="Telefono movil" />
                        </div>
                        <div class="col-lg-6">
                            <label for="correo" class="form-label">Correo:</label>
                            <input type="email" id="correo" name="correo" class="form-control"
                                placeholder="Correo electronico" />
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-lg-6 ">
                            <input class="btn btn-primary mb-2" onclick="registrarCliente()" type="button" value="guardar"></input>
                        </div>
                    </div>
                </form>
            </div>    
    
        </div>
    </div>
</div>
<div class="container" id="result">
    <?php
    include 'consultarCliente.php'
    ?>
</div>