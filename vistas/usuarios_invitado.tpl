<!DOCTYPE html>
<html>
<head>
{include file="headerinfo.tpl"}
<!-- <link rel="icon" href="{$url_base}/img/RS-Logo.png"">
<title>{$proyecto}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{$url_base}css/style.css">
<link rel="stylesheet" href="{$url_base}css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{$url_base}css/dashboard.css" rel="stylesheet"> -->
</head>
<body>

<!-- Cabecera -->
{include file="cabecera.tpl"}
    
<!-- Barra Lateral -->
{include file="barralateral.tpl"}

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" >

  {if $mensaje!=""}
    <div class="alert alert-success" role="alert"><b>{$mensaje}</b></div>
  {/if}
  
  <div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-64" id="projects">
    <h3 class="w3-border-bottom w3-border-black w3-padding-16">Universidades De Nuestros Miembros</h3>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Universidad de Guadalajara</div>
        <img src="{$url_base}img/guadalajara.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Universidad de Buenos Aires</div>
        <img src="{$url_base}img/bsas.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Ludwig Maximilian University of Munich</div>
        <img src="{$url_base}img/munich.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">University of Cambridge</div>
        <img src="{$url_base}img/cambridge.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>
  </div>


  <!-- About Section -->
  <div class="w3-container " id="about">
    <h3 class="w3-border-bottom w3-border-black w3-padding-16">Sobre Nosotros</h3>
    <p>RedStudios es un portal hecho por estudiantes y para estudiantes. Nuestra meta es conectar a aquellos que tienen estudios en común, que deseen ayudar a otros así como compartir sus experiencias, investigaciones, pruebas y toda documentación que consideren útil. Nos encantaría conocer tu opinión del sitio!
    </p>
  </div>


  <div class="w3-container " id="miembros">
    <h3 class="w3-border-bottom w3-border-black w3-padding-16">Miembros</h3>
    <div class="w3-row-padding ">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="{$url_base}img/student1.jpg" alt="Roberto" style="width:100%">
        <h3>Roberto Gómez</h3>
        <p class="w3-opacity">Diseño Industrial</p>
        <p>Estudiante portorriqueño que actualmente realiza la Licenciatura en Diseño Industrial en
        la Universidad de Guadalajara en Jalisco, México.</p>
        <p>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="{$url_base}img/student2.jpg" alt="Julia" style="width:100%">
        <h3>Julia Ross</h3>
        <p class="w3-opacity">Arquitectura</p>
        <p>Estudiante argentina que actualmente realiza la carrera de Arquitecto en
        la Universidad de Buenos Aires en Buenos Aires, Argentina.</p>
        <p>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="{$url_base}img/student3.jpg" alt="Mike" style="width:100%">
        <h3>Mike Schwartz</h3>
        <p class="w3-opacity">Abogacía</p>
        <p>Estudiante danés que actualmente realiza la carrera de Abogado en
        la Universidad Ludwing Maximilian en Munich, Alemania.</p>
        <p>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="{$url_base}img/student4.jpg" alt="Dan" style="width:100%">
        <h3>Sophia Brown</h3>
        <p class="w3-opacity">Psicología</p>
        <p>Estudiante británica que actualmente realiza la carrera de Psicología en
        la Universidad de Cambrdige en Cambridge, Inglaterra.</p>
        <p>
      </div>
    </div>
  </div>

  <div id="googleMap" class="w3-container" style="width: 100%; height: 450px; position: relative; overflow: hidden;">
    <h3 class="w3-border-bottom w3-border-black w3-padding-16">Visitanos en nuestras oficinas</h3>
    <div class="w3-row-padding ">
    <iframe
    width="100%"
    height="450"
    frameborder="0" style="border:0;"
    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB0v08hOT3Va6EuuDgYqZ3Pdowaw8axCHM
      &q=Centro+Mec,Paysandu" allowfullscreen>
    </iframe>
    </div>
  </div>

<footer id="myFooter" style="margin-top: 10px; margin-bottom: -10px;">
    <div class="w3-container w3-theme-l2 w3-padding-12">
      <h4>2018</h4>
    </div>

</footer>

<!-- END MAIN -->
</div>
{include file="login.tpl"}
{include file="Reg_Form.tpl"}
<script language="JavaScript" type="text/javascript" src="{$url_base}js/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript" src="{$url_base}js/bootstrap.min.js"></script>
<script language="JavaScript" type="text/javascript" src="{$url_base}js/functions.js"></script>
<script language="JavaScript" type="text/javascript" src="{$url_base}js/barralateral.js"></script>
<script language="JavaScript" type="text/javascript" src="{$url_base}js/headerimage.js"></script>


</body>
</html>