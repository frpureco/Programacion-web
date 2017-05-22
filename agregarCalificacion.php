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
 <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="assets/css/estiloAdrian.css">
 <link rel="stylesheet" type="text/css" href="assets/css/stylemenu.css">
 <link rel="stylesheet" type="text/css" href="assets/css/styleGaleria.css">
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 	<title>Sube la Calificacion</title>
 </head>

 <body onload="caragartabla()">
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
									Hola <?php echo $_SESSION['user']; ?> Aqui Puedes consultar tus calificaciones
								</label>
							</li>
							</div>								
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
	 <!--seccion del cuerpo-->
<section>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-7 col-md-8">
	<div class="jumbotron">
		<div class="container text-center">
			<label style="font-size: 20px;" class="label label-primary "> ¿que es lo que desaeas hacer?</label>
			<p><label>Vamos a Mostrarte tus calificaciones</label></p>
		</div>
	</div>
</div>
</div>

	<div class="row">
		<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel panel-heading">
				<label style="font-size: 18px;" class="label label-primary">Mis Materias</label>				
			</div>
			<div class="table-responsive">
					<table class="table table-bordered table-hover" id="mmat">						
					</table>
				</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-primary">
			<div class="panel panel-heading">
				<label style="font-size: 18px;" class="label label-primary">Sube la calificacion</label>				
			</div>
			<div>
				<form role="form" id="fgrupo" name="upload" method="post" action="upload.php" enctype="multipart/form-data">				  				  				
				  <div class="form-group">
				    <label for="id_g">Clave Materia</label>
				    <div class="input-group">
				    	<span class="input-group-addon">?</span>
				    	<input type="text" class="form-control" name="mat"
				           placeholder="Introduce la clave de la materia">   
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="sem">Numero de Unidad</label>
				    <div class="input-group">
				    	<span class="input-group-addon">?</span>
				    	<input type="text" class="form-control" name="unidad"
				           placeholder="A que unidad pertenece la calificacion">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="sem">Grupo</label>
				    <div class="input-group">
				    	<span class="input-group-addon">?</span>
				    	<input type="text" class="form-control" name="gr"
				           placeholder="El Grupo Especificado en Numeros">
				    </div>
				  </div>				  
				  <div class="form-group">
				    <label for="">Sube el archivo</label>
				    <div class="input-group">				   
				    	<input type="file" name="archivo" />
				    </div>
				  </div>
				  <input type="submit" class="btn btn-primary" name="subir" value="Upload">Subir</input>
				</form>				
			</div>
		</div>
	</div>
	</div>
	</section>
</body>
<script type="text/javascript" src="assets/js/jquery-3.1.1.js"></script>
 <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/js/scriptTabla.js"></script>
 
</html>