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
 	<title>busca tu Calificacion</title>
 </head>

 <body onload="caragartablaMaterias()">
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
								<a href="VistaAlumnos.php"> Pagina Principal</a>
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
	 <!--seccion del cuerpo-->
<section>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 col-md-7">
	<div class="jumbotron">
		<div class="container">
			<label style="font-size: 20px;" class="label label-primary "> ¿te sientes curioso?</label>
			<p><label>si quieres saber una calificacion en particular, introduce la materia de la que euieras saber tu calificacion.
			si quieres ver todas tus calificaciones haz clic en buscar</label></p>
		</div>
	</div>
</div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-success">
			<div class="panel panel-heading">
				<label class="label label-success" style="font-size: 18px;"> Materias</label>						
			</div>
			<div class="table-responsive">
					<table id="tm" class="table table-bordered table-hover">				
					</table>
			</div>
		</div>
	</div>
			
				
	
</div> 
</section>
</body>
<script type="text/javascript" src="assets/js/jquery-3.1.1.js"></script>
 <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/js/altas.js"></script>
 <script type="text/javascript" src="assets/js/scriptTabla.js"></script>
</html>