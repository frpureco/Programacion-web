<?php 
require 'coneccion.php';
$tipo=$_GET["tipo"];
$id=$_GET["id"];
switch ($tipo) {
	case 'tutor':

		$sql="DELETE FROM tutores WHERE tutores.id_tutor = '$id'";
		//echo $sql;
		$resultado=$mysqli->query($sql);	
		//echo "resultado".$resultado;
		header("location:tutoresInfo.php");
		break;
	default:
		# code...
		break;
}

 ?>