<?php 
#aqui se actulizan los registros, luego de actualizar regresa a la vista de origen
require 'coneccion.php';
$nombre=$_POST["nombre"];
$ap=$_POST["ap"];
$am=$_POST["am"];
$idt=$_POST["idt"];
$sql="UPDATE tutores SET nombre = '$nombre', ap_tutor = '$ap', am_tutor = '$am' WHERE tutores.id_tutor = '$idt'";
$resultado=$mysqli->query($sql);
if ($resultado) {
header('location:tutoresInfo.php');
}
echo $sql;
 ?>