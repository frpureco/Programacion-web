<?php 
#aqui se actulizan los registros, luego de actualizar regresa a la vista de origen
require '../coneccion.php';
$pass=$_POST["pass"];
$tipo=$_POST["tipo"];
$idu=$_POST["idu"];
//echo "tio ".$tipo;
$sql="UPDATE usuarios SET pass = '$pass', tipo = '$tipo' WHERE usuarios.Id_usuario = '$idu'";
$resultado=$mysqli->query($sql);
$mysqli->close();
echo "res ".$resultado;
if ($resultado) {
header('location:../materiasinfo.php');
}
echo $sql;
 ?>