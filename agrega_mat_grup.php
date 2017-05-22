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
 <link rel="stylesheet" type="text/css" href="assets/css/estiloAltas.css">
 <meta charset="utf-8">
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
			<label style="font-size: 20px;" class="label label-primary "> ingresel rfc del profesor</label>
			<p><label>Selecciona los profesores y la materia que van a impartir</label>
			</p>
			<p><label>haz clic en el boton para mostrar los datos de la meteria y los profesores</label></p>
			<button class="btn btn-primary" id="mostrarM_G">Mostrar</button>
		</div>
	</div>
</div>
</div>
<div class="row">
	<div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel panel-heading">
          <label class="label label-primary" style="font-size: 18px;"> Materias que imparte el Profesor</label>
        </div> 
        <div class="alert alert-success" id="correcto">
          <strong>¡Correcto! </strong>Datos insertados correctamente
          </div>
          <div class="alert alert-danger" id="incorrecto">
          <strong>¡Error! </strong>Revisa otra vez lo que introdujiste
          </div>   
        <div class="row">
        <div class="col-md-1" ></div>
          <div class="col-md-10">           
          <form role="form" id="matgrup">
	          <div class="form-group">
	            <label for="cm">Clave de la Materia</label>
	            <div class="input-group">
	              <span class="input-group-addon">?</span>
	              <input type="text" class="form-control " id="cm"
	                   placeholder="Introduce la Clave de la Materia">
	            </div>
	          </div>
          <div class="form-group">
            <label for="nombre">Clave Grupo</label>
            <div class="input-group">
              <span class="input-group-addon">?</span>
              <input type="text" class="form-control " id="idg"
                   placeholder="Introduce la Clave de el Grupo">
            </div>
          </div>                                                               
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>     
          </div>

        </div>
        </div>
    </div>
    <div class="col-md-4">
		<div class="panel panel-success">
			<div class="panel panel-heading">
				<label class="label label-success" style="font-size: 18px;"> Grupo</label>						
			</div>
			<div class="table-responsive">
					<table id="tg" class="table table-bordered table-hover">				
					</table>
			</div>
		</div>
	</div>
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

<script type="text/javascript" src="assets/js/jquery-3.1.1.js"></script>
<script src="assets/js/scriptTabla.js"></script>
<script src="assets/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" href="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/altas.js"></script>


</body>
</html>