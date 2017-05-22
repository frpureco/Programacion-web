<?php

	//recuperar las variables
	$mat=$_POST['Matricula'];
    
    $idAula=$_POST['id_aula'];
    $nom=$_POST['nombre'];
    $apat=$_POST['Apat'];
    $amat=$_POST['Amat'];
    $sem=$_POST['Semestre'];
    $fot=$_POST['foto'];    
    $sex=$_POST['CheckboxGroup1'];
    $edad=$_POST['lsita'];
    $texto=$_POST['area']; 
    $cp=$POST_['nombre'];


if ($_POST['id_carrera']=="Ingeniería en sistemas Computacionales") 
$idCarr=1024;
else if($_POST['id_carrera']=="Ingeniería en Industrias Alimentarias"){
  echo "el nombre:  son Numeros";
}if (!is_numeric($apat)) 
echo "el Apellido Paterno:  "."no son numeros";

else{
  echo"el Apellido Paterno:  ". "son Numeros";
}
if (!is_numeric($amat)) 
echo "el Apellido Materno:   "."no son numeros";

else{
  echo "el Apellido Materno:   "."son Numeros";
}

    echo "el sexo es:\n".$sex;
    echo "el año de nacimiento es: ".$edad;
    echo "los comentarios son: ".$texto;
echo $mat;
echo"\n";
echo $idCarr." ";
echo $idAula." ";
echo $nom." ";
echo $apat." ";
echo $amat." ";
echo $sem." ";
echo $fot." ";

	//hacemos la sentencia de sql
	/*$sql="INSERT INTO `alumno` (`Matricula`, `Id_Aula`, `Id_Carrera`, `Nombre`, `Ap_Alumno`, `Am_Alumno`, `Semestre`, `Foto`) VALUES ('$mat', '$idAula', '$idCarr', '$nom', '$apat', '$amat', '$sem', '$fot')";
        //;
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
        die("error".mysql_error());
	}else{
		echo"Datos Guardados Correctamente<br><a href='index2.html'>Volver</a>";
	}*/
?>