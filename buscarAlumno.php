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
 	<title>Busca tu Calificacion</title>
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
									Hola <?php echo $_SESSION['user']; ?> Bienvenido al área de modificación
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
			<p><label>En esta seccion podrás revisar la información de un alumno, asi como tambien, podrás revisar sus calificaciones</label></p>
		</div>
	</div>
</div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel panel-heading">
				<label style="font-size: 18px;" class="label label-primary">Buscar</label>				
			</div>
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
	<div class="col-md-4">
		<div class="panel panel-success">
			<div class="panel panel-heading">
				<label class="label label-success" style="font-size: 18px;"> Resultados</label>						
			</div>
			<div class="table-responsive">
					<table id="mit" class="table table-bordered table-hover">				
					</table>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel panel-heading">
				<label style="font-size: 18px;" class="label label-primary">Calificaciones</label>				
			</div>
			<div class="table-responsive">
					<table class="table table-bordered table-hover" id="tres">
						<tr>
							<th>Bimestre 1</th>
							<th>Bimestre 2</th>
							<th>Bimestre 3</th>
						</tr>
					</table>
				</div>
		</div>
	</div>
</div> 
<div class="row">
		
</div>
</section>
<script type="text/javascript" src="assets/js/jquery-3.1.1.js"></script>
<script src="assets/js/scriptTabla.js"></script>
<script type="text/javascript" src="assets/js/alertify.js"></script>
<script src="assets/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" href="assets/js/bootstrap.min.js"></script>
</body>
</html>