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
	<title>Información sobre los Grupos</title>
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
									Hola <?php echo $_SESSION['user']; ?> Bienvenido al área de Información de los grupos
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
			<div class="col-md-1"></div>
			<div class="col-md-9 col-md-9">
				<div class="jumbotron">
					<div class="container">
						<label style="font-size: 20px;" class="label label-primary "> Primero Busca el Grupo</label>
						<p><label>Esta sección es solo para ver Informacion relativa a un Grupo, para ello, basta con buscar un grupo; utilizando su número después aparecerá la información correspondiente</label></p>
					</div>
				</div>
			</div>
		</div>
	<div class="row ">
			<div class="col-sm-5 col-md-4">
		<div class="panel panel-primary">
			<div class="panel panel-heading">
				<label style="font-size: 18px;" class="label label-primary">Buscar</label>				
			</div>
			<form action="" id="form" accept-charset="utf-8" >             
        <div class="input-group">
          <input type="text" name="matricula" class="form-control" id="matricula" placeholder="Número del grupo"> 
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
        <div class="panel panel-heading">
				<label class="label label-primary" style="font-size: 18px;"> Resultados</label>						
			</div>
			<div class="table-responsive">
					<table id="mit" class="table table-bordered table-hover">
						<tr>
							<th>Numero</th>
							<th>Horario</th>
							<th>Semestre</th>
						</tr>				
					</table>
			</div>
		</div>		
	</div>
			<div class="col-sm-5 col-md-3 container-fluid">
				<div class="thumbnail">
					<img src="assets/img/backgrounds/2.jpg" alt="Acádémico">
					<div class="caption">
						<h3>Grupo: 101</h3>
						<p>Tutor a cargo:</p>						
						<a href="" class="btn btn-primary" role="button">Accion</a>
					</div>
				</div>
			</div>			
		</div>
</body>
</html>