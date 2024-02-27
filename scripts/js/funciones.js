function msgError() {
    Swal.fire({
        icon: "error",
        title: "Usuario incorrecto",
        showConfirmButton: false,
        timer: 2000
    }).then(function () {
        window.location = "index.php";
    });
}

function msgPasswordError() {
    Swal.fire({
        icon: "error",
        title: "Contraseña incorrecta",
        showConfirmButton: false,
        timer: 2000
    }).then(function () {
        window.location = "index.php";
    });
}

function closeSession() {                      //********************************************************************** */
    Swal.fire({
        title: "Quieres salir del sistema",
        text: "Seleccciona si para salir",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, Salir",
        cancelButtonText: "Cancelar"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = "logout.php"
        }
    }).catch((error) => {
        console.log(error);
    })
}

function cancelarOperacion() {

    window.location = "menu.php";

}

function msgSave() {
    Swal.fire({
        icon: "success",
        title: "Registro exitoso",
        showConfirmButton: false,
        timer: 2000
    }).then(function () {
        window.location = "menu.php";
    });
}

function loadDiv(div, url) {
    $(div).load(url);
}
//< REGISTRAR > 
function registrarCliente() {
    var nombre = $("#nombre").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();


    $.post("registrar/registrarCliente.php", {
        "nombre": nombre,
        "direccion": direccion,
        "telefono": telefono,
        "correo": correo
    }, function (respuesta) {
        // Display an alert message based on the response from the server
        if (respuesta.trim() === "success") {
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            alert("Error al registrar");
        }

        // Clear input fields regardless of the response
        $("#nombre").val("");
        $("#direccion").val("");
        $("#telefono").val("");
        $("#correo").val("");
        loadDiv($("#result"), 'consultarCliente.php')
    });
}

function registrarVehiculo() {
    var matricula = $("#matricula").val();
    var modelo = $("#modelo").val();
    var color = $("#color").val();
    var puertas = $("#puertas").val();
    var tipo = $("#tipo").val();
    var id_cliente = $("#id_cliente").val();

    $.post("registrar/registrarVehiculo.php", {
        "matricula": matricula,
        "modelo": modelo,
        "color": color,
        "puertas": puertas,
        "tipo": tipo,
        "id_cliente": id_cliente

    }, function (respuesta) {
        // Display an alert message based on the response from the server
        if (respuesta.trim() === "success") {
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            alert("Error al registrar");
        }

        $("#matricula").val("");
        $("#modelo").val("");
        $("#color").val("");
        $("#puertas").val("");
        $("#tipo").val("");
        $("#id_cliente").val("");

        loadDiv($("#result"), 'consultarVehiculo.php')
    });
}

function registrarCajon() {
    var numero = $("#numero").val();

    $.post("registrar/registrarCajon.php", {
        "numero": numero,
    }, function (respuesta) {
        // Display an alert message based on the response from the server
        if (respuesta.trim() === "success") {
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            alert("Error al registrar");
        }
        $("#numero").val("");

        loadDiv($("#result"), 'consultarCajon.php', 'menu.php')
       
    });
}

function registrarEmpleado() {
    var nombre = $("#nombre").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();
    var usuario = $("#usuario").val();
    var contrasena = $("#contrasena").val();

    $.post("registrar/registrarEmpleado.php", {
        "nombre": nombre,
        "direccion": direccion,
        "telefono": telefono,
        "correo": correo,
        "usuario": usuario,
        "contrasena": contrasena
    }, function (respuesta) {
        // Display an alert message based on the response from the server
        if (respuesta.trim() === "success") {
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            alert("Error al registrar");
        }

        $("#nombre").val("");
        $("#direccion").val("");
        $("#telefono").val("");
        $("#correo").val("");
        $("#usuario").val("");
        $("#contrasena").val("");
        loadDiv($("#result"), 'consultarEncargados.php')
    });
}

function registrarTarifa() {
    var tarifa = $("#tarifa").val();
    var monto = $("#monto").val();

    $.post("registrar/registrarTarifa.php", {
        "tarifa": tarifa,
        "monto": monto
    }, function (respuesta) {
        // Display an alert message based on the response from the server
        if (respuesta.trim() === "success") {
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            alert("Error al registrar");
        }

        $("#tarifa").val("");
        $("#monto").val("");
        loadDiv($("#result"), 'consultarTarifa.php')
    });
}

function registrarRegistro() {

    var id_vehiculo = $("#id_vehiculo").val();
    var id_cajon = $("#id_cajon").val();
    var id_tarifa = $("#id_tarifa").val();


    $.post("registrar/registrarRegistros.php", {

        "id_vehiculo": id_vehiculo,
        "id_cajon": id_cajon,
        "id_tarifa": id_tarifa,

    }, function (respuesta) {
        // Display an alert message based on the response from the server
        if (respuesta.trim() === "success") {
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            alert("Error al registrar");
        }


        $("#id_vehiculo").val("");
        $("#id_cajon").val("");
        $("#id_tarifa").val("");
        loadDiv($("#result"), 'consultarRegistros.php')
   
    });





    
}
//*</REGISTRAR > */
function eliminarCajon(id_cajon) {
    $.post("eliminar/eliminarCajon.php", {

        "id_cajon": id_cajon

    }, function (result) {
        if (result.trim() === "success") {
            Swal.fire({
                icon: "warning",
                title: "Cajon eliminado",
                showConfirmButton: false,
                timer: 1500
            })
        }
        else {
            alert("Error al eliminar");
        }
        loadDiv($("#result"), 'consultarCajon.php')
    })

}
function eliminarRegistro(id_registro) {
    $.post("eliminar/eliminarRegistro.php", {

        "id_registro": id_registro

    }, function (result) {
        if (result.trim() === "success") {
            Swal.fire({
                icon: "warning",
                title: "Cajon eliminado",
                showConfirmButton: false,
                timer: 1500
            })
        }
        else {
            alert("Error al eliminar");
        }
        loadDiv($("#result"), 'consultarRegistros.php')
    })

}

function eliminarCliente(id_cliente) {
    $.post("eliminar/eliminarCliente.php", {

        "id_cliente": id_cliente

    }, function (result) {
        if (result.trim() === "success") {
            Swal.fire({
                icon: "warning",
                title: "Cajon eliminado",
                showConfirmButton: false,
                timer: 1500
            })
        }
        else {
            alert("Error al eliminar");
        }
        loadDiv($("#result"), 'consultarCliente.php')
    })


}

function eliminarEmpleado(id_empleado) {
    $.post("eliminar/eliminarEncargado.php", {

        "id_empleado": id_empleado

    }, function (result) {
        if (result.trim() === "success") {
            Swal.fire({
                icon: "warning",
                title: "Cajon eliminado",
                showConfirmButton: false,
                timer: 1500
            })
        }
        else {
            alert("Error al eliminar");
        }
        loadDiv($("#result"), 'consultarEncargados.php')
    })


}

function eliminarVehiculo(id_vehiculo) {
    $.post("eliminar/eliminarVehiculo.php", {

        "id_vehiculo": id_vehiculo

    }, function (result) {
        if (result.trim() === "success") {
            Swal.fire({
                icon: "warning",
                title: "Cajon eliminado",
                showConfirmButton: false,
                timer: 1500
            })
        }
        else {
            alert("Error al eliminar");
        }
        loadDiv($("#result"), 'consultarVehiculo.php')
    })

}

function eliminarTarifa(id_tarifa) {
    $.post("eliminar/eliminarTarifa.php", {

        "id_tarifa": id_tarifa

    }, function (result) {
        if (result.trim() === "success") {
            Swal.fire({
                icon: "warning",
                title: "Cajon eliminado",
                showConfirmButton: false,
                timer: 1500
            })
        }
        else {
            alert("Error al eliminar");
        }
        loadDiv($("#result"), 'consultarTarifa.php')
    })
}


function editarCliente(id_cliente) {
    $.post('actualizarCliente.php', {
        "id_cliente": id_cliente
    }, function (respuesta) {
        contenido.innerHTML = respuesta
    })
}

function actualizarEmpleado(id_empleado) {
    $.post('actualizarEmpleado.php', {
        "id_empleado": id_empleado
    }, function (respuesta) {
        contenido.innerHTML = respuesta
    })
}

function actualizarRegistro(id_registro) {
    $.post('actualizarRegistro.php', {
        "id_registro": id_registro
    }, function (respuesta) {
        contenido.innerHTML = respuesta
    })
}

function actualizarTarifa(id_tarifa) {
    $.post('actualizarTarifa.php', {    
        "id_tarifa": id_tarifa
    }, function (respuesta) {
        contenido.innerHTML = respuesta
    })
}

function actualizarVehiculo(id_vehiculo) {
    $.post('actualizarVehiculo.php', {
        "id_vehiculo": id_vehiculo
    }, function (respuesta) {
        contenido.innerHTML = respuesta
    })
}

function modificarCliente(id_cliente) {
    var nombre = $("#nombre").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();
    // alert(id_cliente);

    $.post("actualizar/modificarCliente.php", {
        "id_cliente": id_cliente,
        "nombre": nombre,
        "direccion": direccion,
        "telefono": telefono,
        "correo": correo
    }, function (result) {
        if (result.trim() === "success") {
           alert('Actualizado correctamente');
        }
        else {
            alert("Error al eliminar");
        }
        loadDiv($("#contenido"), 'clientes.php')
    });
}

function modificarVehiculo(id_vehiculo) {
    var matricula = $("#matricula").val();
    var modelo = $("#modelo").val();
    var color = $("#color").val();
    var puertas = $("#puertas").val();
    var tipo = $("#tipo").val();
    var id_cliente = $("#id_cliente").val();

    $.post("actualizar/modificarVehiculo.php", {
        "id_vehiculo":id_vehiculo,
        "matricula": matricula,
        "modelo": modelo,
        "color": color,
        "puertas": puertas,
        "tipo": tipo,
        "id_cliente": id_cliente

    },function (result) {
        if (result.trim() === "success") {
           alert('Actualizado correctamente');
        }
        else {
            alert("Error al eliminar");
        }
        loadDiv($("#contenido"), 'vehiculos.php')
    });
}


function modificarTarifa(id_tarifa) {
    var tarifa = $("#tarifa").val();
    var monto = $("#monto").val();

    $.post("actualizar/modificarTarifa.php", {
        "id_tarifa":id_tarifa,
        "tarifa": tarifa,
        "monto": monto
    },function (result) {
        if (result.trim() === "success") {
           alert('Actualizado correctamente');
        }
        else {
            alert("Error al eliminar");
        }
        loadDiv($("#contenido"), 'tarifas.php')
    });
}

function modificarRegistro(id_registro) {

    var id_vehiculo = $("#id_vehiculo").val();
    var id_cajon = $("#id_cajon").val();
    var id_tarifa = $("#id_tarifa").val();


    $.post("actualizar/modificarRegistro.php", {
        "id_registro":id_registro,
        "id_vehiculo": id_vehiculo,
        "id_cajon": id_cajon,
        "id_tarifa": id_tarifa,

    },function (result) {
        if (result.trim() === "success") {
           alert('Actualizado correctamente');
        }
        else {
            alert("Error al editar");
        }
        loadDiv($("#contenido"), 'registros.php')
    });
}

function modificarEmpleado(id_empleado) {
    var nombre = $("#nombre").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();
    var usuario = $("#usuario").val();
    var contrasena = $("#contrasena").val();

    $.post("actualizar/modificarEmpleado.php", {
        "id_empleado":id_empleado,
        "nombre": nombre,
        "direccion": direccion,
        "telefono": telefono,
        "correo": correo,
        "usuario": usuario,
        "contrasena": contrasena
    },function (result) {
        if (result.trim() === "success") {
           alert('Actualizado correctamente');
        }
        else {
            alert("Error al eliminar");
        }
        loadDiv($("#contenido"), 'encargados.php')
    });
}



function registrarServo() {
    var descripcion = $("#descripcion").val();
    var grados = $("#grados").val();
    var estatus = $("#estatus").val();

    $.post("registrar/registrarServo.php", {
        "descripcion": descripcion,
        "grados": grados,
        "estatus": estatus,
    }, function (respuesta) {
        // Display an alert message based on the response from the server
        if (respuesta.trim() === "success") {
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            alert("Error al registrar");
        }

        // Clear input fields regardless of the response
        $("#descripcion").val("");
        $("#grados").val("");
        $("#estatus").val("");
        loadDiv($("#result"), 'consultarServo.php')
    });
}



function EliminarServo(id_servo) {
    console.log("Eliminando servo con ID: " + id_servo);
    $.post("eliminar/EliminarServo.php", {

        "id_servo": id_servo

    }, function (result) {
        if (result.trim() === "success") {
            Swal.fire({
                icon: "warning",
                title: "Servo eliminado",
                showConfirmButton: false,
                timer: 1500
            })
        }
        else {
            alert("Error al eliminar");
        }
        loadDiv($("#result"), 'consultarServo.php')
    })
    console.log("Eliminando servo con ID: " + id_servo);

}


function modificarServo(id_servo) {
    var descripcion = $("#descripcion").val();
    var grados = $("#grados").val();
    var estatus = $("#estatus").val();

    $.post("actualizar/modificarServo.php", {
        "id_servo": id_servo,
        "descripcion": descripcion,
        "grados": grados,
        "estatus": estatus,
    }, function (result) {
        if (result.trim() === "success") {
            alert('Actualizado correctamente');
        }
        else {
            alert("Error al actualizar");
        }
        loadDiv($("#contenido"), 'consultarServo.php');
    });
}


function editarServo(id_servo) {
    $.post('actualizarServo.php', {
        "id_servo": id_servo
    }, function (respuesta) {
        contenido.innerHTML = respuesta
    })
}





function abrirModal(id_cajon){
    $("#modalPromociones").modal("show");
    $("#id_cajon").val(id_cajon);
}

function cerrarModal(){
    $("#modalPromociones").modal('hide');
    loadDiv($("#result"), 'menu.php');
}




function registrarUltrasonico() {
    var distancia = $("#distancia").val();
    var fecha = $("#fecha").val();
    var hora = $("#hora").val();
    var estatus = $("#estatus").val();

    $.post("registrar/registrarUltrasonico.php", {
        "distancia": distancia,
        "fecha": fecha,
        "hora": hora,
        "estatus" : estatus,
    }, function (respuesta) {
        // Display an alert message based on the response from the server
        if (respuesta.trim() === "success") {
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            alert("Error al registrar");
        }

        // Clear input fields regardless of the response
        $("#distancia").val("");
        $("#fecha").val("");
        $("#hora").val("");
        $("#estatus").val("");
        loadDiv($("#result"), 'consultarUltrasonico.php')
    });
}
