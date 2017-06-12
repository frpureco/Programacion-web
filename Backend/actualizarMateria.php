<?php 
#aqui se actulizan los registros, luego de actualizar regresa a la vista de origen
require '../coneccion.php';
$nombre=$_POST["materia"];
$creditos=$_POST["creditos"];
$semestre=$_POST["semestre"];
$horas=$_POST["horas"];
$idm=$_POST["idm"];

$sql="UPDATE materia SET nombre_mater = '$nombre', creditos = '$creditos', semestre = '$semestre' , horas='$horas' WHERE materia.id_materia = '$idm'";
$resultado=$mysqli->query($sql);
$mysqli->close();
if ($resultado) {
header('location:../materiasInfo.php');
}
echo $sql;
 ?>