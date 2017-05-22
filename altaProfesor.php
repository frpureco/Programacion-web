<?php 
session_start();
if (!empty($_SESSION['user'])) 
  {
 
  }
else{
    header("location: login_index.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Alta Profes</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="assets/css/estiloAdrian.css">
 <link rel="stylesheet" type="text/css" href="assets/css/stylemenu.css">
 <link rel="stylesheet" type="text/css" href="assets/css/styleGaleria.css">
 <link rel="stylesheet" type="text/css" href="assets/css/estiloAltas.css">
 <meta charset="utf-8">
</head>
<body>
  <header class="header">
    <h1> Instituto Tecnológico Superior de Tacámbaro</h1>    
</header>
<div class="container-fluid">   
  <section class="seccionm">
    <nav class="elmenu navbar-fixed" role="navigation">
        
          <ul class="menu">
            <div class="row container-fluid" style="background-color: #eff5ba;">
              <div class="col-md-9">
              <li>
                  <label style="font-size: 16px;">
                  Hola pancho Bienvenido al área de Alta de Profesores
                </label>
              </li>             
              </div> 
                <li>
                <a href="principal.php"> Pagina Principal</a>
                </li>             
                <li>
                  <a href="cerrarSesion.php">Cerrar Sesión</a>
                </li>
              </div>
            </div>
            <div class="clearfix"></div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="panel panel-primary">
        <div class="panel panel-heading">
          <label class="label label-primary" style="font-size: 18px;"> Alta de Profesores</label>
        </div> 
        <div class="alert alert-success" id="correcto">
          <strong>¡Correcto! </strong>Datos insertados correctamente
          </div>
          <div class="alert alert-danger" id="incorrecto">
          <strong>¡Error! </strong>Revisa otra vez lo que introdujiste
          </div>   
        <div class="row">
        <div class="col-md-1" ></div>
          <div class="col-md-10">           
          <form role="form" id="fprof">
          <div class="form-group">
            <label for="rfc">RFC</label>
            <div class="input-group">
              <span class="input-group-addon">?</span>
              <input type="text" class="form-control " id="rfc"
                   placeholder="Introduce el RFC">
            </div>
          </div>
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <div class="input-group">
              <span class="input-group-addon">?</span>
              <input type="text" class="form-control " id="nom_p"
                   placeholder="Introduce el Nombre">
            </div>
          </div>                                    
          <div class="form-group">
            <label for="Ap">Apellido Paterno</label>
            <div class="input-group">
              <span class="input-group-addon">?</span>
              <input type="text" class="form-control " id="ap"
                   placeholder="Introduce el Apellido Paterno">
            </div>
          </div>
          <div class="form-group">
            <label for="Am">Apellido Materno</label>
            <div class="input-group">
              <span class="input-group-addon">?</span>
              <input type="text" class="form-control " id="am"
                   placeholder="Introduce el Apellido Materno">
            </div>
          </div>          
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>     
          </div>
        </div>
        </div>
    </div>
  </div>
</body>
<script type="text/javascript" src="assets/js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/altas.js"></script>
</html>