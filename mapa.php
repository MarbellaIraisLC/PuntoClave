<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Layers Control Tutorial - Leaflet</title>

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

    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="docs/images/favicon.ico"
    />

    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
      integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
      crossorigin=""
    />
    <script
      src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
      integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
      crossorigin=""
    ></script>

    <style>
      html,
      body {
        height: 100%;
        margin: 0;
      }
      .leaflet-container {
        height: 400px;
        width: 600px;
        max-width: 100%;
        max-height: 100%;
      }
    </style>
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


  <div class="form-group"> 
  <br>
  <center>
    <button type="submit" class="btn btn-secondary" name="btn_consulta">Consultar</button>
</center>
  </div>
  </div>
</form>
<br>

</div>






&nbsp; 
&nbsp; 
<p>  </p>
&nbsp; 

  
    </div>
   
    </div>

 </div>


 <?php
require_once "config.php";
function mostrarDatos ($resultados) {
if ($resultados !=NULL) { ?>

 
    <center>
      <div
        id="map"
        class="leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
        tabindex="0"
        style="position: relative"
      >
        <div
          class="leaflet-pane leaflet-map-pane"
          style="transform: translate3d(0px, 0px, 0px)"
        >
          <div class="leaflet-pane leaflet-tile-pane">
            <div class="leaflet-layer" style="z-index: 1; opacity: 1">
              <div
                class="leaflet-tile-container leaflet-zoom-animated"
                style="
                  z-index: 19;
                  transform: translate3d(0px, 0px, 0px) scale(1);
                "
              >
                <img
                  alt=""
                  role="presentation"
                  src="https://b.tile.openstreetmap.org/10/213/388.png"
                  class="leaflet-tile leaflet-tile-loaded"
                  style="
                    width: 256px;
                    height: 256px;
                    transform: translate3d(207px, 30px, 0px);
                    opacity: 1;
                  "
                /><img
                  alt=""
                  role="presentation"
                  src="https://a.tile.openstreetmap.org/10/213/387.png"
                  class="leaflet-tile leaflet-tile-loaded"
                  style="
                    width: 256px;
                    height: 256px;
                    transform: translate3d(207px, -226px, 0px);
                    opacity: 1;
                  "
                /><img
                  alt=""
                  role="presentation"
                  src="https://a.tile.openstreetmap.org/10/212/388.png"
                  class="leaflet-tile leaflet-tile-loaded"
                  style="
                    width: 256px;
                    height: 256px;
                    transform: translate3d(-49px, 30px, 0px);
                    opacity: 1;
                  "
                /><img
                  alt=""
                  role="presentation"
                  src="https://c.tile.openstreetmap.org/10/214/388.png"
                  class="leaflet-tile leaflet-tile-loaded"
                  style="
                    width: 256px;
                    height: 256px;
                    transform: translate3d(463px, 30px, 0px);
                    opacity: 1;
                  "
                /><img
                  alt=""
                  role="presentation"
                  src="https://c.tile.openstreetmap.org/10/213/389.png"
                  class="leaflet-tile leaflet-tile-loaded"
                  style="
                    width: 256px;
                    height: 256px;
                    transform: translate3d(207px, 286px, 0px);
                    opacity: 1;
                  "
                /><img
                  alt=""
                  role="presentation"
                  src="https://c.tile.openstreetmap.org/10/212/387.png"
                  class="leaflet-tile leaflet-tile-loaded"
                  style="
                    width: 256px;
                    height: 256px;
                    transform: translate3d(-49px, -226px, 0px);
                    opacity: 1;
                  "
                /><img
                  alt=""
                  role="presentation"
                  src="https://b.tile.openstreetmap.org/10/214/387.png"
                  class="leaflet-tile leaflet-tile-loaded"
                  style="
                    width: 256px;
                    height: 256px;
                    transform: translate3d(463px, -226px, 0px);
                    opacity: 1;
                  "
                /><img
                  alt=""
                  role="presentation"
                  src="https://b.tile.openstreetmap.org/10/212/389.png"
                  class="leaflet-tile leaflet-tile-loaded"
                  style="
                    width: 256px;
                    height: 256px;
                    transform: translate3d(-49px, 286px, 0px);
                    opacity: 1;
                  "
                /><img
                  alt=""
                  role="presentation"
                  src="https://a.tile.openstreetmap.org/10/214/389.png"
                  class="leaflet-tile leaflet-tile-loaded"
                  style="
                    width: 256px;
                    height: 256px;
                    transform: translate3d(463px, 286px, 0px);
                    opacity: 1;
                  "
                />
              </div>
            </div>
          </div>
          <div class="leaflet-pane leaflet-overlay-pane"></div>
          <div class="leaflet-pane leaflet-shadow-pane">
            <img
              src="https://unpkg.com/leaflet@1.8.0/dist/images/marker-shadow.png"
              class="leaflet-marker-shadow leaflet-zoom-animated"
              alt=""
              style="
                margin-left: -12px;
                margin-top: -41px;
                width: 41px;
                height: 41px;
                transform: translate3d(278px, 314px, 0px);
              "
            /><img
              src="https://unpkg.com/leaflet@1.8.0/dist/images/marker-shadow.png"
              class="leaflet-marker-shadow leaflet-zoom-animated"
              alt=""
              style="
                margin-left: -12px;
                margin-top: -41px;
                width: 41px;
                height: 41px;
                transform: translate3d(300px, 191px, 0px);
              "
            /><img
              src="https://unpkg.com/leaflet@1.8.0/dist/images/marker-shadow.png"
              class="leaflet-marker-shadow leaflet-zoom-animated"
              alt=""
              style="
                margin-left: -12px;
                margin-top: -41px;
                width: 41px;
                height: 41px;
                transform: translate3d(438px, 200px, 0px);
              "
            /><img
              src="https://unpkg.com/leaflet@1.8.0/dist/images/marker-shadow.png"
              class="leaflet-marker-shadow leaflet-zoom-animated"
              alt=""
              style="
                margin-left: -12px;
                margin-top: -41px;
                width: 41px;
                height: 41px;
                transform: translate3d(125px, 163px, 0px);
              "
            />
          </div>
          <div class="leaflet-pane leaflet-marker-pane">
            <img
              src="https://unpkg.com/leaflet@1.8.0/dist/images/marker-icon-2x.png"
              class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive"
              alt="Marker"
              tabindex="0"
              role="button"
              style="
                margin-left: -12px;
                margin-top: -41px;
                width: 25px;
                height: 41px;
                transform: translate3d(278px, 314px, 0px);
                z-index: 314;
                outline: none;
              "
            /><img
              src="https://unpkg.com/leaflet@1.8.0/dist/images/marker-icon-2x.png"
              class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive"
              alt="Marker"
              tabindex="0"
              role="button"
              style="
                margin-left: -12px;
                margin-top: -41px;
                width: 25px;
                height: 41px;
                transform: translate3d(300px, 191px, 0px);
                z-index: 191;
              "
            /><img
              src="https://unpkg.com/leaflet@1.8.0/dist/images/marker-icon-2x.png"
              class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive"
              alt="Marker"
              tabindex="0"
              role="button"
              style="
                margin-left: -12px;
                margin-top: -41px;
                width: 25px;
                height: 41px;
                transform: translate3d(438px, 200px, 0px);
                z-index: 200;
              "
            /><img
              src="https://unpkg.com/leaflet@1.8.0/dist/images/marker-icon-2x.png"
              class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive"
              alt="Marker"
              tabindex="0"
              role="button"
              style="
                margin-left: -12px;
                margin-top: -41px;
                width: 25px;
                height: 41px;
                transform: translate3d(125px, 163px, 0px);
                z-index: 163;
              "
            />
          </div>
          <div class="leaflet-pane leaflet-tooltip-pane"></div>
          <div class="leaflet-pane leaflet-popup-pane">
            <div
              class="leaflet-popup leaflet-zoom-animated"
              style="
                opacity: 1;
                transform: translate3d(279px, 280px, 0px);
                bottom: -7px;
                left: -82px;
              "
            >
              <div class="leaflet-popup-content-wrapper">
                <div class="leaflet-popup-content" style="width: 118px">
                  This is Littleton, CO.
                </div>
              </div>
              <div class="leaflet-popup-tip-container">
                <div class="leaflet-popup-tip"></div>
              </div>
              <a
                class="leaflet-popup-close-button"
                role="button"
                aria-label="Close popup"
                href="#close"
                ><span aria-hidden="true">×</span></a
              >
            </div>
          </div>
          <div class="leaflet-proxy leaflet-zoom-animated"></div>
        </div>
        <div class="leaflet-control-container">
          <div class="leaflet-top leaflet-left">
            <div class="leaflet-control-zoom leaflet-bar leaflet-control">
              <a
                class="leaflet-control-zoom-in"
                href="#"
                title="Zoom in"
                role="button"
                aria-label="Zoom in"
                aria-disabled="false"
                ><span aria-hidden="true">+</span></a
              ><a
                class="leaflet-control-zoom-out"
                href="#"
                title="Zoom out"
                role="button"
                aria-label="Zoom out"
                aria-disabled="false"
                ><span aria-hidden="true">−</span></a
              >
            </div>
          </div>
          <div class="leaflet-top leaflet-right">
            <div
              class="leaflet-control-layers leaflet-control"
              aria-haspopup="true"
            >
              <a
                class="leaflet-control-layers-toggle"
                href="#"
                title="Layers"
                role="button"
              ></a>
              <section class="leaflet-control-layers-list">
                <div class="leaflet-control-layers-base">
                  <label
                    ><span
                      ><input
                        type="radio"
                        class="leaflet-control-layers-selector"
                        name="leaflet-base-layers_55"
                        checked="checked"
                      /><span> OpenStreetMap</span></span
                    ></label
                  ><label
                    ><span
                      ><input
                        type="radio"
                        class="leaflet-control-layers-selector"
                        name="leaflet-base-layers_55"
                      /><span> Streets</span></span
                    ></label
                  ><label
                    ><span
                      ><input
                        type="radio"
                        class="leaflet-control-layers-selector"
                        name="leaflet-base-layers_55"
                      /><span> Satellite</span></span
                    ></label
                  >
                </div>
                <div class="leaflet-control-layers-separator"></div>
                <div class="leaflet-control-layers-overlays">
                  <label
                    ><span
                      ><input
                        type="checkbox"
                        class="leaflet-control-layers-selector"
                        checked=""
                      /><span>Investigadores Independientes</span></span
                    ></label
                  ><label
                    ><span
                      ><input
                        type="checkbox"
                        class="leaflet-control-layers-selector"
                      /><span>Laboratorios</span></span
                    ></label
                  >
                </div>
              </section>
            </div>
          </div>
          <div class="leaflet-bottom leaflet-left"></div>
          <div class="leaflet-bottom leaflet-right">
            <div class="leaflet-control-attribution leaflet-control">
              <a
                href="https://leafletjs.com"
                title="A JavaScript library for interactive maps"
                ><svg
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  width="12"
                  height="8"
                >
                  <path fill="#4C7BE1" d="M0 0h12v4H0z"></path>
                  <path fill="#FFD500" d="M0 4h12v3H0z"></path>
                  <path fill="#E0BC00" d="M0 7h12v1H0z"></path>
                </svg>
                Leaflet</a
              >
              <span aria-hidden="true">|</span> ©
              <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>
            </div>
          </div>
        </div>
      </div>
    </center>
    
    
    <script>
   
 
   const mySet1 = new Set()
    const mySet12 = new Set()
 
    mySet1.add(<?php echo  $resultados['coordenada1'];?>); 
     mySet2.add(<?php echo  $resultados['coordenada2'];?>);
     

        
    </script>
    
    
    <script>
      var cities = L.layerGroup();



      var mLittleton = L.marker([39.61, -105.02])
        .bindPopup("This is Littleton, CO.")
        .addTo(cities);
      var mDenver = L.marker([39.74, -104.99])
        .bindPopup("This is Denver, CO.")
        .addTo(cities);
      var mAurora = L.marker([39.73, -104.8])
        .bindPopup("This is Aurora, CO.")
        .addTo(cities);
      var mGolden = L.marker([39.77, -105.23])
        .bindPopup("This is Golden, CO.")
        .addTo(cities);

      var mbAttr =
        'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>';
      var mbUrl =
        "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw";

      var streets = L.tileLayer(mbUrl, {
        id: "mapbox/streets-v11",
        tileSize: 512,
        zoomOffset: -1,
        attribution: mbAttr,
      });

      var osm = L.tileLayer(
        "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
        {
          maxZoom: 19,
          attribution:
            '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        }
      );

      var map = L.map("map", {
        center: [39.73, -104.99],
        zoom: 5,
        layers: [osm, cities],
      });

      var baseLayers = {
        OpenStreetMap: osm,
        Streets: streets,
      };

      var overlays = {
        Cities: cities,
      };

      var layerControl = L.control.layers(baseLayers, overlays).addTo(map);
      
          var variables =  L.marker(['<?php echo  $resultados['coordenada1'];?>', '<?php echo  $resultados['coordenada2'];?>']).bindPopup(
        "<p>Nombre del estudio:</p><?php echo  $resultados['Nombre del estudio'] ;?><br><p>Laboratorio:</p><?php echo  $resultados['laboratorio'] ;?> <?php echo  $resultados['investigadores'] ;?>."
      );
             
        
      var parks = L.layerGroup([variables]);

      var satellite = L.tileLayer(mbUrl, {
        id: "mapbox/satellite-v9",
        tileSize: 512,
        zoomOffset: -1,
        attribution: mbAttr,
      });
      layerControl.addBaseLayer(satellite, "Satellite");
      layerControl.addOverlay(parks, "Parks");
    </script>
    
    
<?php 

echo "<br/>";}

else {echo "<br/>No hay más datos!!! <br/>";}

}
if (isset($_POST['btn_consulta'])) {

$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM Mapeo " );
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

