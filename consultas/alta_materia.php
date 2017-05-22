<?php 
require '../coneccion.php';
$idm=$_POST["idm"];
$nom=$_POST["nombre"];
$credit=$_POST["credit"];
$sem=$_POST["sem"];
$hrs=$_POST["hrs"];
$sql="INSERT INTO materia (id_materia,nombre_mater,creditos, semestre, horas) VALUES ('$idm', '$nom', '$credit', '$sem','$hrs')";
if ($mysqli->query($sql)===true) {		
	echo json_encode(array('error'=>false));
}else
echo json_encode(array('error'=>true));
$mysqli->close();
 ?>