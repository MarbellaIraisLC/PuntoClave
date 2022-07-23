<?php
// Initialize the session
session_start();

require_once "config.php";



// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}



?>
 
 <?php


$usuaria= htmlspecialchars($_SESSION["username"]);

$query = "SELECT * FROM Directorio where username = '$usuaria'";

if ($result = $link->query($query)) {

    while ($row = $result->fetch_assoc()) {
        
$field1name = $row["COL1"];
$field2name = $row["id"];
$field3name = $row["COL 3"];
$field4name = $row["rol"];
$field5name = $row["username"];
$field6name = $row["password"];
$field7name = $row["nombre"];
$field8name = $row["COL 8"];
$field9name = $row["COL 9"];
$field10name = $row["COL 10"];
$field11name = $row["COL 11"];
$field12name = $row["COL 12"];
$field13name = $row["COL 13"];
$field14name = $row["COL 14"];
$field15name = $row["COL 15"];
$field16name = $row["COL 16"];
$field17name = $row["COL 17"];
$field18name = $row["COL 18"];
$field19name = $row["COL 19"];
$field20name = $row["COL 20"];
$field21name = $row["COL 21"];
$field22name = $row["COL 22"];
$field23name = $row["COL 23"];
$field24name = $row["COL 24"];
$field25name = $row["COL 25"];
$field26name = $row["COL 26"];
$field27name = $row["COL 27"];
$field28name = $row["COL 28"];
$field29name = $row["pais2"];
$field30name = $row["COL 30"];
$field31name = $row["COL 31"];
$field32name = $row["COL 32"];


    }

/*freeresultset*/
$result->free();
}
 
 ?>
 
 

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="icon" href="https://cdn.glitch.global/763d3acd-0126-4190-8cea-87c29b97a65e/puntoclave.png?v=1658440225579" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">


    <title>Perfil</title>

    <!-- Import the webpage's stylesheet -->

<link rel="stylesheet" href="/form.css" />
    <!-- Import the webpage's javascript file -->
    <script src="/script.js" defer></script>
    
    
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body >
    
<header>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Punto Clave</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
               <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                <a class="nav-link active" aria-current="page" href="info.html">Informate</a>
                     <a class="nav-link active" aria-current="page" href="#">Login</a>
            <a class="nav-link" href="register.php">Registro</a>
            <a class="nav-link" href="mapa.php">Base</a>
            <a class="nav-link" href="networking.php">Networking</a>
                        <a class="nav-link" href="login.php">Perfil</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
      <a href="reset-password.php" class="btn btn-secondary">Actualizar contraseña</a>
        <a href="logout.php" class="btn btn-info">Cerrar sesión</a>
   
   
   
</body>
</html>
