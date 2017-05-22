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
 	<title>Vista de los profesores</title>
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
									Hola <?php echo $_SESSION['user']; ?> Aqui Puedes subir tus calificaciones
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
			<p><label>Elige alguna de las dos opciones que se muestran abajo, y recuerda que tus profesores están para ayudarte</label></p>
		</div>
	</div>
</div>
</div>

	<div class="row"><!--fila 1-->
		<div class="col-sm-2 col-md-1"></div>
		<div class="col-sm-4 col-md-2"></div>
	  <div class="col-sm-6 col-md-4"><!--columna1-->
	    <div class="thumbnail">
	      <img class="img-resposive" src="images/photodune-460760-colors-xs.jpg" alt="Imagen">
	      <div class="caption">
	        <h3>Agrega una calificacion</h3>        
	        <p>
	          <a href="agregarCalificacion.php" class="btn btn-primary" role="button">Ir a mis Materias</a>          
	        </p>
	      </div>
	    </div>
	  </div>
  
</div> 
</section>
</html>