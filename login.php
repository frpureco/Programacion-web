<?php
sleep(1);
session_start();
//require 'coneccion.php'
//  $user = $_POST["user"];
//  $pass = $_POST["pass"];
//echo "el usuario es: ".$user;                                                   
//  $sql = mysql_query("SELECT Nombre FROM usuarios WHERE Nombre='$user' AND Pass='$pass'");
//  if (mysql_num_rows($sql) == 1) {
//    $data = mysqli_fetch_array($result);
//    $_SESSION["user"] = $data["user"];
//    echo "1";
//  } else {
//    echo "error";
//  }

require 'coneccion.php';
$usr=$_POST["user"];
$pas=$_POST["pass"];
//echo "el usuario es: ".$usr;
$sql="SELECT * FROM usuarios WHERE Id_usuario='$usr' AND pass='$pas'";
//echo $sql;
$usuarios=$mysqli->query($sql);

if($usuarios->num_rows==1):
	
//echo "hubo coincidencias";
$datos=$usuarios->fetch_assoc();
$_SESSION['user']=$datos['Id_usuario'];
//echo $datos;
echo json_encode(array('error' => false, 'tipo' => $datos['tipo']));
else:
//echo " no hubo coincidencias";
echo json_encode(array('error'=>true));
endif;
$mysqli->close();
?>