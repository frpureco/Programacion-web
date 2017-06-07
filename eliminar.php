
<?php 
	require 'coneccion.php';
	$ruta=$_POST['ruta'];	
	//echo "LA RUTA\n".$ruta;
	//$idm=$_GET['idm'];
	$sql="DELETE FROM unidad WHERE unidad.ruta='$ruta'";
	$res=$mysqli->query($sql);
	//echo "respuesta\n".$res;
	//$row=$res->fetch_assoc();
	if ($res==1) {
		unlink($ruta);
		//header("location:mostarCalificacion.php?resp_eliminar=true&id='$idm'");
		echo json_encode(array('error' => false));
	}else{
	//header('location:mostarCalificacion.php?resp_eliminar=false');
	}

 ?>