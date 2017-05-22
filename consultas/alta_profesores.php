<?php 
require '../coneccion.php';
$rfc=$_POST["rfc"];
$nom=$_POST["nombre"];
$ap=$_POST["ap"];
$am=$_POST["am"];
$sql="INSERT INTO profesor (id_profesor ,nombre_prof ,Ap_prof ,Am_prof ) VALUES ('$rfc', '$nom', '$ap', '$am')";

if ($mysqli->query($sql)===true) {		
	echo json_encode(array('error'=>false));
}else
echo json_encode(array('error'=>true));
$mysqli->close();
 ?>
