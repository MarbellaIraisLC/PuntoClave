
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <link rel="icon" href="https://amassuru-web.000webhostapp.com/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="" />
    
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 
    <title>Base de datos</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style >
        body{ font: 14px sans-serif;  
}
.box{
    max-width:90%;
   margin: 1rem;
  padding: 2rem;
  display: flex;
  justify-content: center;


}
}
    </style>
</head>
    <!-- Import the webpage's stylesheet -->
    <link rel="stylesheet" href="/style.css" />

    <!-- Import the webpage's javascript file -->
    <script src="/script.js" defer></script>
 



</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
          <a class="navbar-brand" href="#">
      <img src="https://amassuru-web.000webhostapp.com/logo.png" alt="" width="35" height="35" class="d-inline-block align-text-top">
     Amassuru
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
        </li>
                <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Done</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Anuncios</a>
        </li>

            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Datos 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="base.php">Base de datos</a></li>
            <li><a class="dropdown-item" href="#">Estadísticas</a></li>
        
          </ul>
        </li>    
        
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Boletín 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

      </ul>
      

      
      <form class="d-flex">
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <button type="button" class="btn btn-light"><i class="fa fa-language" style="font-size:20px"></i></button>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Español</a></li>
            <li><a class="dropdown-item" href="#">English</a></li>
            <li><a class="dropdown-item" href="#">Português</a></li>
          </ul>
        </li>
     
           </ul>
              
          <a class="nav-link active" aria-current="page" href=""></a>
         <a href="login.php" class="btn btn-secondary btn-sm">Ingreso/Registro</a>
      
      </form>
    </div>
  </div>
</nav>
   
    
 

<body>
    
    <br>
    <br>
    <CENTER>
    <H1 id ="titulo">AMASSURU BASE DE DATOS</H1>
    </CENTER>
    
<br>


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
 <option value="">1. Prevención y reducción de delitos y/o violencias</option>
 <option value="">2. Gestión de Políticas Públicas de Seguridad</option>
  <option value="">3. Monitoreo y Evaluación de Políticas de Seguridad</option>
   <option value="">4. Sistemas de Información de Estadística Criminal</option>
    <option value="">5. Crimen Organizado</option>
     <option value="">6. Ciberseguridad</option>
         <option value="">7. Terrorismo</option>
               <option value="">8. Conflicto y Postconflicto</option>
                <option value="">9. Fuerzas de Seguridad/Armadas</option>
                 <option value="">10. Sistema Judicial</option>
                    <option value="">11. Sistema Penitenciario</option>
                           <option value="">12. Cambio Climático y Seguridad</option>
                                  <option value="">13. Cooperación en Seguridad Internacional</option>
      </select>
  </div>
<div class="col-auto">
    <label for="example1">   Nombre</label>
      <select class="form-select" id="Nombre">
        <option value="0">Seleccione:</option>
        <?php
          $query1 = $link -> query ("SELECT distinct nombre FROM Directorio order by nombre asc");
          while ($valores = mysqli_fetch_array($query1)) {
            echo '<option value="'.$valores["nombre"].'">'.$valores["nombre"].'</option>';
          }
       
        ?>
      </select>
  </div>
  <div class="col-auto">
    <label for="example2">País</label>
      <select class="form-select" id="pais">
        <option value="0">Seleccione:</option>
        <?php
          $query1 = $link -> query ("SELECT distinct pais2 FROM Directorio order by pais2 asc");
          while ($valores = mysqli_fetch_array($query1)) {
            echo '<option value="'.$valores["pais2"].'">'.$valores["pais2"].'</option>';
          }
        ?>
      </select>
  </div>
  <div class="form-group"> 
  <br>
    <button type="submit" class="btn btn-secondary" name="btn_consulta">Consultar</button>
  </div>
  </div>
</form>
<br>

</div>






&nbsp; 
&nbsp; 
<p>  </p>
&nbsp; 




<div class="wrapper">


                   <?php
require_once "config.php";
function mostrarDatos ($resultados) {
if ($resultados !=NULL) { ?>

 <div class="div-perfil-usuario" >
    <div class="perfil-usuario-body">


     
                <H4><?php echo $resultados['nombre']."<br/> "; ?></H4>
                
                      <img
            src="<?php echo $resultados['COL 28']."<br/> "; ?>"
            class="imgRedonda"  
          />
                                <ul class="lista-datos">
                      <li><i class="icono fas fa-briefcase"></i> Institución a la que pertenece: <?php echo $resultados['COL 8']."<br/> "; ?></li>
    <li><i class="icono fas fa-building"></i> Nivel de formación profesional: <?php echo $resultados['COL 17']."<br/> "; ?></li>
                  <li><i class="icono fas fa-building"></i> Años de experiencia: <?php echo $resultados['COL 18']."<br/> "; ?></li>
                    <li><i class="icono fas fa-map-marker-alt"></i>País de origen: <?php echo $resultados['COL 9']."<br/> "; ?></li>
                     <li><i class="icono fas fa-map-marker-alt"></i>País de residencia:  <?php echo $resultados['pais2']."<br/> "; ?></li>
                    <li><i class="icono fas fa-share-alt"></i>Cuenta de Twitter: <?php echo $resultados['COL 32']."<br/> ";?></li>
                </ul>

                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-signs"></i> Temas de especialidad: <?php echo $resultados['COL 14']."<br/> "; ?></li>
                </ul>

<br>
<br>

   <hr width=100%  align="right"  size=15   noshade="noshade">

<?php 

echo "<br/>";}

else {echo "<br/>No hay más datos!!! <br/>";}

}
if (isset($_POST['btn_consulta'])) {
  
    $pais=$_POST['pais'];
    
    echo $pais;
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM Directorio " );
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

<br>

 </div>

</body>

</html>
