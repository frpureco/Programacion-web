<?php 
#aqui se actulizan los registros, luego de actualizar regresa a la vista de origen
require '../coneccion.php';
$sem=$_POST["semestre"];
$idg=$_POST["idg"];

$q1="SELECT  horario from grupo where id_grupo='$idg'";
		$resultado=$mysqli->query($q1);
		if ($resultado) {
			$row=$resultado->fetch_assoc();
		$fileViejo=$row['horario'];
		unlink($fileViejo);
		}
		

echo "id es este\n".$idg."\n";
$ruta = "C:/AppServ/www/progweb/Horarios/";
opendir($ruta);

$destino = $ruta.$_FILES['archivo']['name'];
echo "destino ".$destino;
#echo "destino".$destino;
copy($_FILES['archivo']['tmp_name'],$destino);

$nombre=$_FILES['archivo']['name'];
if (strpos($nombre," ")) {
echo "<h1>Ups!! El archivo : \"".$nombre."\" parece que no cumple con la regla de los espacios en blanco</h1>
	<h2>Porfavor Asegurate de que el archivo no tenga espacios en blanco</h2>";
}else{
$sql="UPDATE grupo SET Semestre = '$sem', horario = '$destino' WHERE grupo.id_grupo = '$idg'";
$resultado=$mysqli->query($sql);
$mysqli->close();
if ($resultado) {
header('location:../gruposinfo.php');
}
echo $sql;}
 ?>