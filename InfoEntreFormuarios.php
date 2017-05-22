<!DOCTYPE html>

<?php
session_start();
if (!empty($_SESSION['user'])) 
  {
 
  }
else{
    header("location: login_index.php");
}

?>
<html>
<head>
<meta charset="utf-8">
	<title> Alta de Alumnos</title>
    <link rel="stylesheet" type="text/css" href="css/estiloAdrian.css">  
</head>
<body>
<!-- este es el header-->

<header class="header">
    <h1> Instituto Tecnológico Superior de Tacámbaro</h1>
    <ul>
        <li><a href="Aula.html">Aulas</a></li>
        <li> <a href="#">Docentes</a></li>
    </ul>
</header>
<label>binvenido <?php echo $_SESSION['user']; ?></label>
<a class="cerrar" href="cerrarSesion.php">cerrar sesion</a> 
	<div class= "form"> 	  
        <form action="insertar.php" method="post"> 
            <div class="div1">
                <label for="matricula">Matricula</label>
                <br>                     
                <input type="number" name="Matricula"placeholder= "13940183" required>
                <br>
                <label>Carrera:</label>
                <br/>
                <!-- esta es la lista para elegir las carreras-->
                <select name="lsita" id="lsita" class="form2" >
                <option>
                Ingresa una carrera
                </option>
                <option>Ingeniería en sistemas Computacionales</option>
                <option>Ingeniería en Industrias Alimentarias</option>
                <option>Ingeniería en Administración</option>
                <option>Ingeniería en Innovación Agrícola Sustentable </option>
                <option>Ingeniería en Geociencias</option>
                </select>
                <br>
                <br>
                <label for="id_aula">ID_aula</label>
                <br>
                <input type="number" name="id_aula"
                placeholder= "id_Aula" required>		
            </div>        
            <!-- termina la seccion 1 del formulario-->   
            <div class="div2"> 
                <br>			
                <div class="div21">
                    <label for="nombre">Nombre</label>
                    <br>
                    <input type="text" name="nombre"	
                    placeholder= "Nombre" required>
                    <br>
                    <label for="Semestre">Semestre</label>
                    <br>
                    <input type="text" name="Semestre" placeholder="Semestre" requiered>
                    <br>
                    <label for="Foto">Foto</label>
                    <br>
                    <input type="file">
                    <br>
                    <br>  
                    <input type="submit" value="Guardar">
                    <br>
                </div>
                <div class="div22">
                    <label for= "Apellidop">Apellido Paterno</label>
                    <br>
                    <input type="text" name="Apat" placeholder="Apellido" required>
                    <br> 			
                    <label for= "Am">Apellido Materno</label>
                    <br>
                    <input type="text" name="Amat" placeholder="Apellido Materno"required>
                    <br>  
                </div> 			
                    <!--
                    <textarea name ="area" id="area1" cols="20" rows="5" ></textarea> -->
            </div>
        </form>
        
</div>
</body>
</html>