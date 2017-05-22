<?php 
$resp=$_POST["resp"];
switch ($resp) {
	case 'alumno':
		$mat=$_POST["matr"];
		$nom=$_POST["nom"];
		$ap=$_POST["ap"];
		$am=$_POST["am"];
		$carr="sist";
		$grp=$_POST["grp"];
		$foto=$_POST["foto"];
		$sql="INSERT INTO alumno (Matricula, id_grupo, id_carrera, Nombre, Ap_al, Am_al,Foto) VALUES ('$mat', '$grp', '$carr', '$nom', '$ap', '$am', '$foto')";
		ejecutar($sql);
		break;
		case 'grupo':
			$idg=$_POST["idg"];
		#$nom=$_POST["nombre"];
		$hor=$_POST["hor"];
		$sem=$_POST["sem"];
		$sql="INSERT INTO grupo (id_grupo,horario,Semestre ) VALUES ('$idg','$hor','$sem')";
		ejecutar($sql);
			break;
			case 'profesor':
				$rfc=$_POST["rfc"];
				$nom=$_POST["nombre"];
				$ap=$_POST["ap"];
				$am=$_POST["am"];
				$sql="INSERT INTO profesor (id_profesor ,nombre_prof ,Ap_prof ,Am_prof ) VALUES ('$rfc', '$nom', '$ap', '$am')";
				ejecutar($sql);
				break;
			case 'materia':
				$idm=$_POST["idm"];
				$nom=$_POST["nombre"];
				$credit=$_POST["credit"];
				$sem=$_POST["sem"];
				$hrs=$_POST["hrs"];
				$sql="INSERT INTO materia (id_materia,nombre_mater,creditos, semestre, horas) VALUES ('$idm', '$nom', '$credit', '$sem','$hrs')";
				ejecutar($sql);
				break;
				case 'tutor':
					$idt=$_POST["idt"];
					$g_asc=$_POST["g_asc"];
					$nom=$_POST["nom"];
					$ap=$_POST["ap"];
					$am=$_POST["am"];
					$sql="INSERT INTO tutores(id_tutor,id_grupo,nombre,ap_tutor,am_tutor  ) VALUES ('$idt', '$g_asc','$nom', '$ap', '$am')";
					ejecutar($sql);
					break;
					case 'usuarios':
					$nom=$_POST["nom"];
					$contra=$_POST["contra"];
					$tipo=$_POST["tipo"];
					
					$sql="INSERT INTO usuarios( Id_usuario,pass,tipo ) VALUES ('$nom', '$contra','$tipo')";
					ejecutar($sql);
						break;
						case 'mat-prof':
					$rfc=$_POST["rfc"];
					$idm=$_POST["idm"];
					$anio=$_POST["anio"];
					
					$sql="INSERT INTO prof_imparte_materia(id_profesor,id_materia,anio)VALUES ('$rfc', '$idm','$anio')";
					ejecutar($sql);
							break;
							case 'mat-grup':
					$idg=$_POST["idg"];
					$idm=$_POST["cm"];					
					$sql="INSERT INTO mat_imparte_grupo(id_materia,id_grupo)VALUES ('$idm', '$idg')";
					ejecutar($sql);
								break;
	default:
		# code...
		break;
}
function ejecutar($sqll)
{
	# code..
	require '../coneccion.php';
	if ($mysqli->query($sqll)===true) {		
	echo json_encode(array('error'=>false));
}else
echo json_encode(array('error'=>true));
$mysqli->close();
}
 ?>