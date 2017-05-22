<html>
<head>
	<title>RESULTADOS</title>	
</head>
<body>
	<h1>Se recibieron los datos: </h1>
	<?php
	 $v1=$_GET['nombre'];
	 $v2=$_GET['apellido'];	
	 $v3=$_GET['carrera'];
	 $v4=$_GET['edad'];	 
	?>
	<p> Nombre: <?php echo $v1;?></p>
	<p>Appelido:<?php echo $v2;?></p>
	<p>Carrera: <?php echo $v3;?></p>
	<p>Edad: <?php echo $v4;?></p>
</body>
</html>


