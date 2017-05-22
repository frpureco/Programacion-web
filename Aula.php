<?php 
session_start();
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
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/estilova.css">        
    </head>
    <body>
        <header class="header">
            <h1> Instituto Tecnológico Superior de Tacámbaro</h1>
            <ul><label>binvenido <?php echo $_SESSION['user']; ?></label>
            <a class="cerrar" href="cerrarSesion.php">cerrar sesion</a>                 
</header></ul>

   <form action="coneccion.php" method="post" class="form">
       <div class="div1">
         <h2>
             Alta de Aulas
         </h2>
          <label for="AulaClave"> Numero del Aula</label>
                <br>                     
                <input type="number" name="IdAula"placeholder= "Identificador del Aula" required>
                <br>
                <label>Nombre del Aula:</label>
                <br>
                <input type="text" name="nombreaula" required>
                <br/>                            
                <br>
                <label>Horario del Aula</label>
                <input type="file" >
                <br> 
                <input type="submit" name="ingresaA" value="ingresa Aula"> 
       </div>                     
   </form>   
   <form action="coneccion.php" method="post" class="form">
           <div class="div2">
           <h2>
             Alta de Carreras
         </h2>
          <label for="carreraClave"> Numero del Aula</label>
                <br>                     
                <input type="number" name="Nombrec"placeholder= "Identificador del Aula" required>
                <br>
                <label>Nombre de la Carrera:</label>
                <br>
                <input type="submit" name="ingresaC" value="Ingresar"> 
       </div>          
       </form>   
    </body>
</html>