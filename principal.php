<?php
// Pagina del Administrador
session_start();
if (!empty($_SESSION['user'])) 
  { 

  }
else{
    header("location: login_index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">       
<title>Administrador de calificaciones</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/estiloAdrian.css">
<link href="assets/css/stylemenu.css" media="screen" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="assets/css/styleGaleria.css"><script src="prefix-free.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">

 </head>
  <body>   
<header class="header page-header">       
    <h1> Instituto Tecnológico Superior de Tacámbaro</h1>    
</header>
 <div class="container-fluid"><!-- una rejilla que se adapta al tamaño-->
	<div class="row"> 
		<div class="col-md-12">
			<section class="seccionm">  <!-- Seccion del menú-->    
				<nav class="elmenu  navbar-fixed" role="navigation"> 
				<label>bienvenido <?php echo $_SESSION['user']; ?></label>
					<ul class="menu ">							
						<div class="contenido">									
									<li><a href="#"><span class="iconic magnifying-glass"></span> Alumnos</a>
										<ul>
												<li><a href="buscarAlumno.php">Calificaciones</a></li>
												<li><a href="InfoAlumnos.php">Datos</a></li>			
											</ul>
										</li>
										<li><a href="profesoresinfo.php"> <span class="iconic map-pin"> </span> Profesores</a>					
										</li>

										<li><a href="tutoresInfo.php">Tutores</a>
										    
										</li>
										<li><a href="gruposinfo.php">Grupos</a>
											
										</li>
										<li><a href="materiasinfo.php">Materias</a>
											
										</li>
										<li><a href="">Altas</a>
											<ul>
												<li><a href="altaAlumno.php">Alumno</a></li>
												<li><a href="altaProfesor.php">Profesor</a></li>
												<li><a href="altaGrupo.php">Grupo</a></li>
												<li><a href="altaMaterias.php">Materia</a></li>
												<li><a href="altaTutores.php">Tutores</a></li>
											</ul>
										</li>
										<li><a href="cerrarSesion.php">Cerrar sesion</a></li>
						</div>		
					</ul>
							<div class="clearfix"></div>																
				</nav>
			</section>
		</div>
	</div>
</div> 


<div class="cuerpo">
	<div class="container-fluid"><!-- una rejilla que se adapta al tamaño-->
		<div class="row"> <!-- indica a boostrap que es una fila-->
				<div class="col-md-2"><!-- columna de Acciones-->
					<div class="panel panel-primary">
						<label>Acciones</label>
							<ul class="nav nav-pills nav-stacked">						
							  <!-- <li ><a href="#">Crear Notificacion</a></li> -->
							  <li><a href="#">Agregar nuevo Horario</a></li>
							  <li><a href="#">Agregar Alumnos a Grupos</a></li>
							  <li><a href="agrega_mat_prof.php">Agregar Profesores a Materias</a></li>
							  <li><a href="agragausu.php">Agregar usuarios</a></li>
							  <li><a href="agrega_mat_grup.php">Agregar Materias a un Grupo</a></li>
							</ul>
					</div>
									
				</div>
			
				<div class="container-fluid"><!--columna 2-->
					<div class="row">	
							<div class="col-md-5">
								<label> </label>
									<div class="jumbotron">
									  <div class="container">
										  <h2>Bienvenido Administrador</h2>
										    <p> En esta seccion podrás administrar facilmente tus Actividades.
										    Es necesario destacar que esta seccion aún esta en desarrollo.
											  </p>
										    <p><a class="btn btn-primary btn-lg" role="button">Leer más</a></p>
									  </div>
									</div>
							</div>
					<div class="col-md-5"><!-- columna 3 seccion de la galeria-->									    	      		         
		            <div class="col-md-10">
		              <div class="panel panel-primary" id="gal">
		              <label>Galeria</label>
		              	<ul class="row">
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-174908-rocking-the-night-away-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-287182-blah-blah-blah-yellow-road-sign-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-460760-colors-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-461673-retro-party-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-514834-touchscreen-technology-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-916206-legal-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-1062948-nature-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-1471528-insant-camera-kid-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-2255072-relaxed-man-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-2360379-colors-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-2360571-jump-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-2361384-culture-for-business-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-2441670-spaghetti-with-tuna-fish-and-parsley-s.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-2943363-budget-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-3444921-street-art-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-3552322-insurance-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-3807845-food-s.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-3835655-down-office-worker-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-4619216-ui-control-knob-regulators-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-5771958-health-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-268693-businesswoman-using-laptop-outdoors-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-352207-search-of-code-s.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-247190-secret-email-xs.jpg">
		            </li>
		            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
		                <img class="img-responsive" src="images/photodune-682990-online-search-xs.jpg">
		            </li>
		          </ul>
		              </div>
		            </div>		                                
		    <!-- /container -->	    	    
		    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		      <div class="modal-dialog">
		        <div class="modal-content">         
		          <div class="modal-body">                
		          </div>
		        </div><!-- /.modal-content -->
		      </div><!-- /.modal-dialog -->
		    </div><!-- /.modal -->					
					</div>
				</div>
			</div>	
		</div><!--fila 1-->
	</div><!--container fluid-->
</div><!--Cuerpo de la página-->        	          
  </body>
    <script type="text/javascript" src="assets/js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/photo-gallery.js"></script>
</html>
