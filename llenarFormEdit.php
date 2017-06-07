<?php 
require 'coneccion.php';
$tipo=$_POST["tipo"];
$idt=$_POST["id"];
//echo "tipo";
switch ($tipo) {
	case 'tutor':
		$q1="SELECT  * from tutores where id_tutor='$idt'";
		$resultado=$mysqli->query($q1);
		$row=$resultado->fetch_assoc();	
		$modal= "<form role=\"form\" id=\"ftut\" action=\"actualizar.php\" method=\"post\">
				  <div class=\"form-group\">
				    <label for=\"id_t\">Clave del tutor</label>
				    <div class=\"input-group\">
				    	<span class=\"input-group-addon\">?</span>
				    	<input type=\"text\" class=\"form-control\"  id=\"id_tutor\"
				           placeholder=\"Introduce la clave del tutor\" value=".$row['id_tutor'].
				           " name=\"idt\">
				    </div>
				  </div>
				  <div class=\"form-group\">
				    <label for=\"ga\">grupo asesorado</label>
				    <div class=\"input-group\">
				    	<span class=\"input-group-addon\">?</span>
				    	<input type=\"text\" class=\"form-control\" id=\"ga\"
				           placeholder=\"Introduce el grupo al que asesora\" value=".$row['id_grupo'].">
				    </div>
				  </div>
				  <div class=\"form-group\">
				    <label for=\"Nombre\">Nombre tutor</label>
				    <div class=\"input-group\">
				    	<span class=\"input-group-addon\">?</span>
				    	<input type=\"text\" class=\"form-control\" id=\"nom_t\" name=\"nombre\"
				           placeholder=\"Introduce el nombre del tutor\" value=".$row['nombre'].">
				    </div>
				  </div>				  
				  <div class=\"form-group\">
				    <label for=\"sem\">Apellido paterno</label>
				    <div class=\"input-group\">
				    	<span class=\"input-group-addon\">?</span>
				    	<input type=\"text\" class=\"form-control\" id=\"ap_t\"
				           placeholder=\"Introduce el Apellido paterno del tutor\" name=\"ap\" value=".$row['ap_tutor'].">
				    </div>
				  </div>
				  <div class=\"form-group\">
				    <label for=\"am\">Apellido materno</label>
				    <div class=\"input-group\">
				    	<span class=\"input-group-addon\">?</span>
				    	<input type=\"text\" class=\"form-control\" id=\"am\" placeholder=\"Introduce el Apellido materno del tutor\" name=\"am\" value=".$row['am_tutor'].">
				    </div>
				  </div>
				  <input type=\"submit\" class=\"btn btn-primary\" value=\"Actualizar\" ></input>
				</form>";
					echo json_encode(array('modal'=>$modal));
		break;
	
	default:
		# code...
		break;
}



 ?>