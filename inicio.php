<h1>Dashboard</h1>

<?php
include "conexion.php";
$query = "SELECT * FROM cajones ORDER BY numero";
$ejecutar = $conexion->query($query);
echo "<div class='row'>";
while ($result = $ejecutar->fetch_array()) {
    echo "<div class='col-sm-3'>
    <div class='card' style='width:18rem;'>
        <img src='imagenes/coche.png' class='card-img-top' alt'imagen'>
            <div class='card-body'>
                <h5 class='card-title'> Cajon " .
        $result["numero"] .
        "</h5>";
    if ($result["estatus"] == 1) {
        $query2 =
            "SELECT * FROM registro INNER JOIN vehiculos ON 
        vehiculos.id_vehiculo = registro.id_vehiculo INNER JOIN cajones ON 
        cajones.id_cajon = registro.id_cajon INNER JOIN tarifa ON 
        tarifa.id_tarifa = registro.id_tarifa INNER JOIN empleados ON
         empleados.id_empleado = registro.id_empleado WHERE registro.id_cajon = " .
            $result["id_cajon"] .
            "";
        $ejecutar2 = $conexion->query($query2);
        while ($result2 = $ejecutar2->fetch_array()) {
            echo "<h4>Matricula:" . $result2["matricula"] . "</h4>";
            echo "<p>" .
                $result2["fechaIngreso"] .
                " " .
                $result2["horaIngreso"] .
                "</p>";
            echo "<p>" . $result2["tarifa"] . "</p>";
            echo "<p>" . $result2["nombre"] . "</p>";
            echo "<a href='#' class='btn btn-warning' onclick='eliminarRegistro(" .
                $result2["id_registro"] .
                ")' >Salir</a>";
        }
        if($result["ocupado"]==true){
            echo "<img src='imagenes/ocupado.png' style='height:20px'>";
         }
         else{
            echo "<img src='imagenes/desocupado.png' style='height:20px'>";
          }
    } else {
        echo "<p class='card-text'>No existe un vehiculo ocupando este cajon</p>";
        echo "<a href='#' class='btn btn-info' data-toggle='modal' data-target='#myModal' onclick='abrirModal(" .
            $result["id_cajon"] .
            ")' >Ocupar</a>";
            if($result["ocupado"]==false){
                echo "<img src='imagenes/desocupado.png' style='height:20px'>";
              }
      
    }
    echo "</div></div></div>";
}
?>


<div class="modal" id="modalPromociones">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Cabecera del Modal -->
      <div class="modal-header">
        <h4 class="modal-title">Registar Uso de estacionamiento</h4>
        <button type="button" class="close" data-dismiss="modal" onclick='cerrarModal();'>&times;</button>
      </div>


      <div class="form-outline mb-4">
        <label class=" form-label" for="cajon">Cajon</label>
        <input type=" text" name ="id_cajon" id="id_cajon" value="" class="form-control" readonly="readonly ">

      <div class="row">


                        <div class="col-lg-6">
                            <label for="id_vehiculo" class="form-label" required>Vehiculo:</label>
                            <select class="form-control" name="id_vehiculo" id="id_vehiculo">
                                <option value="" select>- SELECCIONA -</option>
                                <?php
                                include "conexion.php";
                                $query =
                                    "SELECT id_vehiculo, matricula FROM vehiculos";
                                $ejecutar = $conexion->query($query);
                                while ($resultado = $ejecutar->fetch_array()) {
                                    echo "<option value='" .
                                        $resultado["id_vehiculo"] .
                                        "'>" .
                                        $resultado["matricula"] .
                                        "</option>";
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
                                include "conexion.php";
                                $query = "SELECT id_tarifa, tarifa FROM tarifa";
                                $ejecutar = $conexion->query($query);
                                while ($resultado = $ejecutar->fetch_array()) {
                                    echo "<option value='" .
                                        $resultado["id_tarifa"] .
                                        "'>" .
                                        $resultado["tarifa"] .
                                        "</option>";
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
  </div>
</div>


