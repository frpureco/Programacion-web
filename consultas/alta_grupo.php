<?php 
require '../coneccion.php';
$idg=$_POST["idg"];
$nom=$_POST["nombre"];
$hor=$_POST["hor"];
$sql="INSERT INTO grupo (id_grupo ,nombre_grupo ,horario ) VALUES ('$idg', '$nom', '$hor')";
if ($mysqli->query($sql)===true) {		
	echo json_encode(array('error'=>false));
}else
echo json_encode(array('error'=>true));
$mysqli->close();
 ?>