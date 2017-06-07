<?php 
require 'coneccion.php';
$resp=$_POST["resp"];

echo "res".$resp;
//$row['id_tutor']."&idg=".$row['id_grupo']."&nom=".$row['nombre']."&ap=".$row['ap_tutor']."&am=".$row['am_tutor']
switch ($resp) {
	case 'tutor':
	$idt=$_POST["id"];
$idg=$_POST["idg"];
$nom=$_POST["nom"];
$ap=$_POST["ap"];
$am=$_POST["am"];
		$sql="UPDATE tutores SET nombre = '$nom',ap_tutor='$ap',am_tutor='$am' WHERE tutores.id_tutor = '$idt'";
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