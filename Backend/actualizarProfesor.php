<?php 
#aqui se actulizan los registros, luego de actualizar regresa a la vista de origen
require '../coneccion.php';
$nombre=$_POST["nombre"];
$ap=$_POST["ap"];
$am=$_POST["am"];
$idp=$_POST["idp"];

$ruta = "C:/Users/FRANCISCO/Documents/Horarios/";
opendir($ruta);
$destino = $ruta.$_FILES['archivo']['name'];
#echo "destino".$destino;
copy($_FILES['archivo']['tmp_name'],$destino);

echo $nombre.$ap,$am;
$sql="UPDATE profesor SET nombre_prof = '$nombre', Ap_prof = '$ap', Am_prof = '$am' WHERE profesor.id_profesor = '$idp'";
$resultado=$mysqli->query($sql);
$mysqli->close();
if ($resultado) {
header('location:../profesoresinfo.php');
}
echo $sql;
 ?>