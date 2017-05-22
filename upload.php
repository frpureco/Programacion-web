<?php 
require 'coneccion.php';
$ruta = "C:/Users/FRANCISCO/Documents/Calificaciones/";
opendir($ruta);
$destino = $ruta.$_FILES['archivo']['name'];
echo "destino".$destino;
copy($_FILES['archivo']['tmp_name'],$destino);
$nombre=$_FILES['archivo']['name'];
$mat=$_POST["mat"];
$unidad=$_POST["unidad"];
echo "materia= ".$mat;
$sql="SELECT id_calificacion FROM calificacion WHERE id_materia='$mat'";
$cc=$mysqli->query($sql);
$datos=$cc->fetch_assoc();
echo "id".$datos["id_calificacion"];
$idc=$datos["id_calificacion"];
$sqll="INSERT INTO unidad(id_calificacion, no_unidad ,ruta) VALUES ('$idc', '$unidad', '$destino')";
echo "sqll".$sqll;
	if ($mysqli->query($sqll)===true) {		
	echo "Ingreso correcto";
}
$mysqli->close();
error_reporting(E_ALL);
 ?>