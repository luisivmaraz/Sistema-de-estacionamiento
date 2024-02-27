<?php
session_start();
$idUsuario=$_SESSION['id'];
$nombre=$_SESSION['name'];

if (!isset($_SESSION['loggedin'])) {
  echo '<script language="javascript">alert("Debes de iniciar sesión"); window.location.href="index.php"; </script>';
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estilos.css" rel="stylesheet">
  <script src="scripts/js/funciones.js"></script>
  <script src="scripts/js/jquery.min.js"></script>
  <script src="scripts/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body class="px-4">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
      <div class="container-fluid">
        <img src="./imagenes/img.png" style="width:2em" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>




        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
           
            <li class="nav-item">

              <a class="nav-link active" onclick="loadDiv('#contenido','inicio.php');" aria-current="page"
                href="#">inicio</a>
            </li>
            <li class="nav-item">
              <span class="nav-link">|</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadDiv('#contenido','registros.php');">Registros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadDiv('#contenido','cajones.php');">Cajones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadDiv('#contenido','clientes.php');">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadDiv('#contenido','vehiculos.php');">Vehiculos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadDiv('#contenido','tarifas.php');">Tarifas</a>
            </li>
            <li class="nav-item">
              <span class="nav-link">|</span>
            </li>
           
           
           
           
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Otros
              </a>



              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#" onclick="loadDiv('#contenido','encargados.php');">encargados</a></li>
                <li><a class="dropdown-item" href="#" onclick="loadDiv('#contenido','reportes.php');">Reportes</a></li>
                <li><a class="dropdown-item" href="#" onclick="loadDiv('#contenido','servomotor.php');">servomotor</a></li>
                <li><a class="dropdown-item" href="#" onclick="loadDiv('#contenido','ultrasonico.php');">Ultrasonico</a></li>
                <li><a class="dropdown-item" href="#" onclick="closeSession ();">Salir</a></li>

              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div id="contenido">
  <div class="row mt-2 px-5">
    <div class="b-4">
        <div class="card">
            <div class="card-body text-center" >
              <p>Bienvenido <b><?php echo $nombre ?></b> </p>

      <p>Hola si</p>

        </div>
    </div>
  </div>
  <script src="scripts/js/bootstrap.bundle.min.js"></script>
</body>

</html>