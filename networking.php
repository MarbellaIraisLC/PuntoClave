<!DOCTYPE html>
<html lang="en">
  <head>
    <!--
      This is the page head - it contains info the browser uses to display the page
      You won't see what's in the head in the page
      Scroll down to the body element for the page content
    -->

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://cdn.glitch.global/763d3acd-0126-4190-8cea-87c29b97a65e/puntoclave.png?v=1658440225579" />

    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <!-- 
      This is an HTML comment
      You can write text in a comment and the content won't be visible in the page
    -->

    <title>Punto Clave</title>

    <meta
      name="description"
      content="A simple website, built with Glitch. Remix it to get your own."
    />
    <meta name="robots" content="index,follow" />
    <meta property="og:title" content="H!" />
    <meta property="og:type" content="article" />

    <meta
      property="og:description"
      content="A ."
    />
    <meta
      property="og:image"
      content="https://cdn.glitch.com/605e2a51-d45f-4d87-a285-9410ad350515%2Fhello-website-social.png?v=1616712748147"
    />
    <meta name="twitter:card" content="summary" />

    <!-- Import the webpage's stylesheet -->
    <link rel="stylesheet" href="/style.css" />

    <!-- Import the webpage's javascript file -->
    <script src="/script.js" defer></script>
  </head>

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
  
  <body>
    <div
      class="container"
      style="
        background-image: url('/Imagenes/microscope-gd38634ab8_1920.jpg');
        background-size: 100%;
      "
    >
      <div class="row align-items-start">
        <div class="col">
          <p class="redondo"
            style="
              padding: 95px;
              text-align: center;
              font-size: 25px;
              font-family: 'Nunito', sans-serif;
              color: black;
            "
          >
           Únete a nuestro servidor de networking
          </p>

          <center>
              
            <button class="redondo" onclick="window.location.href='https://discord.gg/FCfGH5JA9E'">Abrir</button>
          </center>
        </div>
        <div class="col">
          <div style="width: 80%">
                 <a href=""
              ><img
                style="margin-left: 95px"
                src="https://sm.ign.com/t/ign_es/tag/d/discord/discord_x2j2.300.png"
                width="65%"
                height="85%"
                alt="design web"
            /></a>
          </div>
        </div>
      </div>
      <br />

      <div class="linea"></div>
      <br />
    </div>

    <div class="container" style="background-color: #001d44">
          <div class="linea"></div>
            <div class="linea"></div>
<center>   <H1    style="
              color: white;
          
            ">Comunicate con los investigadores de nuestra Red</H1>
      <div class="linea"></div>
    </center> 
    
    
    
<br>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap');
 #titulo { color: #90679c;
  font-size:2em;
  font-family: 'Fredoka', sans-serif;
  
 }

.div-perfil-usuario .perfil-usuario-body .texto {
    color: #848484;
    font-size: 0.95em;
    text-align: justify;
    font-family: 'Fredoka', sans-serif;
}


.div-perfil-usuario .lista-datos {
    
    list-style: none;
    text-align: justify;
    
}

.div-perfil-usuario .lista-datos li {
  
  /**  font-family: 'Fredoka', sans-serif; **/
}

.div-perfil-usuario .lista-datos li>.icono {
    font-size: 1.0rem;

}


.imgRedonda {
    max-width:30%;
  max-height:150px;
    border-radius:150px;
}


</style>
<div class="box">

<br>
<?php
require_once "config.php";
?>

<div class:"busqueda">
<form method = "post">
  <div class="row g-3">
<div class="col-auto">
    <label for="Select1">Tema</label>
      <select class="form-select" id="Select1">
        <option value="0">Seleccione:</option>
 <option value="">Especialistas</option>

      </select>
  </div>
<div class="col-auto">

  <div class="form-group"> 
  <br>
    <button type="submit" class="btn btn-secondary" name="btn_consulta">Consultar</button>
  </div>
  </div>
</form>
<br>

</div>



 </div>


&nbsp; 
&nbsp; 
<p>  </p>
&nbsp; 
<style>
.box{
    max-width:90%;

  display: flex;
  justify-content: center;


}

</style>
  

<div class="wrapper">


                   <?php
require_once "config.php";
function mostrarDatos ($resultados) {
if ($resultados !=NULL) { ?>

 <div class="div-perfil-usuario" >
    <div class="perfil-usuario-body"   style="
                           color: white;
            ">

<ul class="lista-datos">
                 
                                    <H4><?php echo $resultados['username']."<br/> "; ?></H4>
                                      <img
            src="<?php echo $resultados['COL 28']."<br/> "; ?>"
            class="imgRedonda"  
          />                    
                        <li><i class="icono fas fa-share-alt"></i>Nombre: <?php echo $resultados['username']."<br/> ";?></li>
             

 </ul>
<br>
<br>

   <hr width=100%  align="right"  size=15   noshade="noshade">

<?php 

echo "<br/>";}

else {echo "<br/>No hay más datos!!! <br/>";}

}
if (isset($_POST['btn_consulta'])) {
  

$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM User" );
while ($fila = mysqli_fetch_array($result)){
mostrarDatos($fila);
}
mysqli_free_result($result);
mysqli_close($link);

}
?>
   

        </div>
        <br>

  
    </div>
   
    </div>

   </div>

    
    
   
    <footer class="footer">
      <div class="links"></div>
    </footer>
  </body>
</html>
