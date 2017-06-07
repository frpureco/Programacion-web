<?php
session_start();
require 'coneccion.php';
if (!empty($_SESSION['user'])) 
  {
 
  }
else{
    header("location: login_index.php");
}
$id_mat=$_GET['id'];
//echo "materia= ".$id_mat;
$query="SELECT no_unidad,ruta FROM unidad,calificacion WHERE unidad.id_calificacion=calificacion.id_calificacion AND calificacion.id_materia='$id_mat' ORDER BY `no_unidad` ASC";
	$resultado=$mysqli->query($query);
	//$row=$resultado->fetch_assoc();
		
		while($row=$resultado->fetch_array()) {
		$rows[]=$row;
		$cont=$cont+1;
}

//selecciona el nombre de la materia
$q1="SELECT  nombre_mater from materia where id_materia='$id_mat'";
#echo "id=\n".$id_mat;
$resultado=$mysqli->query($q1);	
$row=$resultado->fetch_assoc();	

	

 ?>
 <!DOCTYPE html>
 <html>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <head>
 <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="assets/css/estiloAdrian.css">
 <link rel="stylesheet" type="text/css" href="assets/css/stylemenu.css">
 <link rel="stylesheet" type="text/css" href="assets/css/styleGaleria.css">
 <link rel="stylesheet" type="text/css" href="assets/css/estiloAltas.css">
 <meta charset="utf-8">

 	<title>Descarga la Caificacion</title>
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
			<label style="font-size: 20px;" class="label-primary text-center label"> Descarga El archivo que contiene Tu calificacion</label>
			<p><label>Vamos a Mostrarte tus calificaciones</label></p>
			
		</div>
	</div>
</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-xs-12 col-md-6">
		<div class="panel panel-primary">
			<div class="panel panel-heading">
				<label style="font-size: 18px;" class=" text-center label-primary label">Unidades de la Materia de <?php echo $row['nombre_mater']; ?></label>				
			</div>
			<div class="table-responsive">
					<table class="table table-bordered table-hover" id="tuni">
						<strong></strong>
						<tr>
							<th>Numero Unidad</th>
							<th>Acciones</th>
						</tr>
							<div class="alert alert-success" id="correcto">

  			  <strong>¡Correcto! </strong>Archivo Eliminado Correctamente
  			  </div>
  			  <div class="alert alert-danger" id="incorrecto">
  			  <strong>¡Error! </strong>El archivo no se elimninó
  			  </div> 
						<?php 
						if ($cont>0) {
							foreach ($rows as $row) {
								
								echo "<tr>".
								 "<td><a href=>".$row['no_unidad']."</a></td>".
								 "<td><a class=\"btn btn-primary\" href=\"Descargar_archivo.php?ruta=".$row['ruta']."\">"."Descargar PDF</a></td>".								 
								 "</tr>";
								 #href=\"eliminar.php?archivo=".$row['ruta']."&idm=".$id_mat."\"
							}
						}														
						 ?>	
					</table>
				</div>
		</div>
	</div>
	
	</div>
	</div>
	</section>
</body>
<script type="text/javascript" src="assets/js/jquery-3.1.1.js"></script>
 <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/js/scriptTabla.js"></script>
 <script type="text/javascript" src="assets/js/main.js"></script>
</html>