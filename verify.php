<?php
//modulo de coneccion con la base de datos
if(isset($_POST['submit'])){
	//conectamos Con el servidor
	$conectar=@mysql_connect('localhost','root','Pureco93900');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{	$base=mysql_select_db('sistemacalificaciones');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
    
    $usr = $_POST['username'];
    $pas = $_POST['password'];
    $sql = mysql_query("SELECT * FROM usuarios WHERE Nombre='$usr' AND Pass='$pas'"
);
    //echo"hay coincidencias".$sql;
    
    if(mysql_num_rows($sql) == 1){
        echo "si encontro algo";
       
        session_start();
        $_SESSION['username'] = $row['Nombre'];
        //$_SESSION['fname'] = $row['first_name'];
        //$_SESSION['lname'] = $row['last_name'];
        $_SESSION['logged'] = TRUE;
        header("Location: users_page.php");
        exit;
    } else {
         echo "error en la insercion".$usr;
        //Sheader("Location: login.html");
        exit;
    }
} 
else {
    header("Location: info.php");    
    exit;
}
?>

