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
	<title>Alta de nuevos grupos</title>
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
									Hola pancho Bienvenido al área de alta de grupos
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
					</ul>
				<div class="clearfix"></div>				
		</nav>
	</section>
</div>
	
  <div class="row">
  	<div class="col-md-2"></div>
  	<div class="col-md-8">
  		<div class="panel panel-primary">
  			<div class="panel panel-heading">
  				<label class="label label-primary" style="font-size: 18px;"> Alta de grupos</label>
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
  				<form role="form" id="fgrupo">				  				  				
				  <div class="form-group">
				    <label for="id_g">Clave del grupo</label>
				    <div class="input-group">
				    	<span class="input-group-addon">?</span>
				    	<input type="text" class="form-control" id="id_g"
				           placeholder="Introduce la clave del grupo">   
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="sem">Semestre</label>
				    <div class="input-group">
				    	<span class="input-group-addon">?</span>
				    	<input type="text" class="form-control" id="sem"
				           placeholder="Introdue el semestre con nunmeros">
				    </div>
				  </div>				  
				  <div class="form-group">
				    <label for="h">horario del grupo</label>
				    <div class="input-group">				   
				    	<input type="file" class="form-control" id="horario">   
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