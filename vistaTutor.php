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
 	<title>Bienvenido Tutor</title>
 </head>
 <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="assets/css/estiloAdrian.css">
 <link rel="stylesheet" type="text/css" href="assets/css/stylemenu.css">
 <link rel="stylesheet" type="text/css" href="assets/css/styleGaleria.css">
 <meta charset="utf-8">
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
									Hola <?php echo $_SESSION['user']; ?> Bienvenido al área de Información de los Tutores
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
	<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-9 col-md-9">
				<div class="jumbotron">
					<div class="container">
						<label style="font-size: 20px;" class="label label-primary "> Primero Busca el Alumno</label>
						<p><label>Esta sección es solo para ver Informacion relativa a tus Alumnos, podrás ver como va su desempeño en cada una de sus materias, para ello Basta con buscar un tutor; utilizando su Matricula, después aparecerá la informacion Correspondiente</label></p>
					</div>
				</div>
			</div>
		</div>
	<div class="row ">
			<div class="col-sm-6 col-md-5">
		<div class="panel panel-primary">			
        <div class="panel panel-heading">
				<label class="label label-primary" style="font-size: 18px;"> Mis Alumnos</label>						
			</div>
			<div class="table-responsive">
					<table id="mit" class="table table-bordered table-hover">
						<tr>
							<th>Matricula</th>
							<th>Nombre completo</th>
							<th>Apellido paterno</th>
							<th>Apellido Materno</th>
						</tr>				
					</table>
			</div>
		</div>		
	</div>
			<div class="col-sm-5 col-md-3 container-fluid">
				<div class="thumbnail">
					<img src="assets/img/backgrounds/2.jpg" alt="Acádémico">
					<div class="caption">
						<h3>Alumno: Francisco Javier Pureco Lucas</h3>
						<p>Matricula: 13940183</p>
						<p>Grupo: 103</p>
						<p>Semestre</p>						
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="panel panel-primary">
					<div class="panel panel-heading">
						<label class="label label-primary" style="font-size: 18px;"> Calificaciones</label>
					</div>
					<div class="table-responsive">
					<table id="mit" class="table table-bordered table-hover">
						<tr>
							<th>Materia</th>
							<th>Bimestre 1</th>
							<th>Bimestre 2</th>
							<th>Bimestre 3</th>
						</tr>				
					</table>
			</div>					
				</div>
			</div>
		</div>
 </body>
 </html>