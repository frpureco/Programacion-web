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
	<title>Alta de nuevos Alumnos</title>
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
									Hola pancho Bienvenido al área de Información de los Tutores
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
  				<label class="label label-primary" style="font-size: 18px;"> Alta de Alumnos</label>
  			</div>  			
  				<div class="alert alert-success" id="correcto">
  			  <strong>¡Correcto! </strong>Datos insertados correctamente
  			  </div>
  			  <div class="alert alert-danger" id="incorrecto">
  			  <strong>¡Error! </strong>Revisa otra vez lo que introdujiste
  			  </div>  		 			 
  			<div class="row">
  			<div class="col-md-1" ></div>
  				<div class="col-md-5">  					
  				<form role="form" id="alta">
				  <div class="form-group">
				    <label for="Matricula">Matricula</label>
				    <div class="input-group">
				    	<span class="input-group-addon">?</span>
				    	<input type="number" class="form-control " id="matr"
				           placeholder="Introduce la matricula">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="Grupo">Grupo</label>
				    <div class="input-group">
				    	<span class="input-group-addon">?</span>
				    	<input type="number" class="form-control " id="grp"
				           placeholder="Introduce la matricula">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="Nombre">Nombre(s)</label>
				    <div class="input-group">
				    	<span class="input-group-addon">?</span>
				    	<input type="text" class="form-control" id="nom"
				           placeholder="Introduce el nombre">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="Ap">Apellido Paterno</label>
				    <div class="input-group">
				    	<span class="input-group-addon">?</span>
				    	<input type="text" class="form-control" id="ap"
				           placeholder="Introduce el primer apellido">
				    </div>
				  </div>				  
				  <button type="submit" class="btn btn-primary">Guardar</button>
				</form>  		
  				</div>
  				<div class="col-md-5">
  					<div class="form-group">
				    <label for="AM">Apellido Materno</label>
				    <div class="input-group">
				    	<span class="input-group-addon">?</span>
				    	<input type="text" class="form-control" id="am"
				           placeholder="Introduce el segundo apellido">
				    </div>
				  </div>				 
				  <div class="form-group">
				    <label for="AM">Carrera</label>
				    <div class="input-group">
				    	<span class="input-group-addon">?</span>
				    	<select class="form-control" id="carrera">
				    		<option></option>
				    		<option>Ingeniería en Sistemas Computacionales</option>
				    	</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="fot">Foto</label>
				    <div class="input-group">
				    	<span class="input-group-addon">?</span>
				    	<input type="file" class="form-control" id="foto"
				           placeholder="busca la foto">
				    </div>
				  </div>
  				</div>
  			</div>
  			</div>
  	</div>
  </div>
  <script type="text/javascript" src="assets/js/jquery-3.1.1.js"></script>
 <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/js/altas.js"></script>
</body>

</html>