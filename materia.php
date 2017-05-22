<?php session_start();
if (!empty($_SESSION['user'])) 
  {
 
  }
else{
    header("location: login_index.php");
}
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Alta de Aulas</title>
        <link rel="stylesheet" type="text/css" href="css/estilova.css">
        <link rel="stylesheet" type="text/css" href="css/estiloAdrian.css">
    </head>
    <body>
        <header class="header">
            <h1> Instituto Tecnológico Superior de Tacámbaro</h1>
            <a class="cerrar" href="cerrarSesion.php">cerrar sesion</a>                 
</header>
   <form action="coneccion.php" method="post" class="form">
       
       </form>   
    </body>
</html>