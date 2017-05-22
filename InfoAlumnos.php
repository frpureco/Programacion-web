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
<title>Mira la Informacion de Un Alumno</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="assets/css/estiloAdrian.css">
 <link rel="stylesheet" type="text/css" href="assets/css/stylemenu.css">
 <link rel="stylesheet" type="text/css" href="assets/css/styleGaleria.css">
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
									Hola <?php echo $_SESSION['user']; ?> Bienvenido al área de Información de los Alumnos
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
	 <!--seccion del cuerpo-->
	<section>
	 	<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-9 col-md-9">
				<div class="jumbotron">
					<div class="container">
						<label style="font-size: 20px;" class="label label-primary "> Primero Busca el Alumno</label>
						<p><label>Esta seccion es solo para ver Informacion relativa a un alumno, para ello Basta con buscra un alumno; utilizando su matricula, después aparecerá la informacion personal y académica del alumno</label></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row ">
			<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel panel-headind">
				<label style="font-size: 18px;" class="label label-primary">Buscar</label>
				<form action="" id="form" accept-charset="utf-8" >             
               <div class="input-group">
                	<input type="text" name="matricula" class="form-control" id="matricula" placeholder="Matricula"> 
                		<span class="input-group">                	
                		<input type="submit" name="buscar" value="Buscar" id="buscar" class="btn btn-default"> 
                		</span>                	 
                </div>                                 
            </form>
        	<div class="Error" style="display: none;">
        	<div class="alert alert-warning">        		
					 <strong>¡Oye!</strong>Escribe algo para buscar
        	</div>
        </div>
        <div class="vacio" style="display: none;">
        	<div class="alert alert-danger">        		
					 <strong>¡Ups!</strong> No hubo resultados para la búsqueda
        	</div>
        </div>
			</div>
		</div>		
	</div>
			<div class="col-sm-5 col-md-3 container-fluid">
				<div class="thumbnail">
					<img src="assets/img/backgrounds/2.jpg" alt="Acádémico">
					<div class="caption">
						<h3>Alumno: Francisco Javier Pureco Lucas</h3>
						<p>Matricula: 13940183</p>
						<p>Aula: </p>
						<p>Semestre:</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>