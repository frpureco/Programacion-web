<?php 
require '../coneccion.php';
$idt=$_POST["idt"];
$g_asc=$_POST["g_asc"];
$nom=$_POST["nom"];
$ap=$_POST["ap"];
$am=$_POST["am"];
$sql="INSERT INTO tutores(id_tutor,id_grupo,nombre,ap_tutor,am_tutor) VALUES ('$rfc','$g_asc','$nom','$ap','$am')";
if ($mysqli->query($sql)===true) {		
	echo json_encode(array('error'=>false));
}else
echo json_encode(array('error'=>true));
$mysqli->close();
 ?>