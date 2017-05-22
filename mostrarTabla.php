<?php 
session_start();
require 'coneccion.php';
$mat=$_POST["matr"];
$resp=$_POST["resp"];
#$nom=$_POST["nombre"];
//echo("la matricula es: ".$mat);

//$usuarios=$mysqli->query("SELECT * FROM alumno ORDER BY Nombre ASC");
switch ($resp) {
	case 'alumno':	
	$usuarios=$mysqli->query("SELECT * FROM alumno where Matricula like '%$mat%'");
	$cont=0;
	while($row=$usuarios->fetch_array()) {
		$rows[]=$row;
		$cont=$cont+1;
}
	$mysqli->close();
 	tAlumno($cont,$rows);
		break;
	case 'mostrar':
		$usuarios=$mysqli->query("SELECT * FROM profesor");
		$cont=0;
		while($row=$usuarios->fetch_array()) {
			$rows[]=$row;
			$cont=$cont+1;
}
	//$mysqli->close();
 	
 	#..................................................
 	$usuarios1=$mysqli->query("SELECT * FROM materia");
		$cont1=0;
		while($row=$usuarios1->fetch_array()) {
			$rows1[]=$row;
			$cont1=$cont1+1;
}
	$mysqli->close();
	tmyp($cont,$rows,$cont1,$rows1);
		break;
		case 'mat-prof':
		#las materias que imparte e profesor.
		$id=$_SESSION['user'];
		//echo "usuario".$id;
		$usuarios=$mysqli->query("SELECT * from materia,profesor,prof_imparte_materia WHERE materia.id_materia=prof_imparte_materia.id_materia AND profesor.id_profesor=prof_imparte_materia.id_profesor AND prof_imparte_materia.id_profesor='$id'");
	$cont=0;
	while($row=$usuarios->fetch_array()) {
		$rows[]=$row;
		$cont=$cont+1;
}
//echo "contador: ".$cont;
	$mysqli->close();
	tm($cont,$rows);
			break;
			case 'mostrarmg':
				$usuarios=$mysqli->query("SELECT * FROM grupo");
		$cont=0;
		while($row=$usuarios->fetch_array()) {
			$rows[]=$row;
			$cont=$cont+1;
}
	//$mysqli->close();
 	
 	#..................................................
 	$usuarios1=$mysqli->query("SELECT * FROM materia");
		$cont1=0;
		while($row=$usuarios1->fetch_array()) {
			$rows1[]=$row;
			$cont1=$cont1+1;
}
	$mysqli->close();
	tmyg($cont,$rows,$cont1,$rows1);
	break;
	case 'mat-grupo':
		#las materias que se imparten en el grupo.
		#para la vista de los alumnos.
		$id=$_SESSION['user'];
		//echo "usuario".$id;
		$usuarios=$mysqli->query("SELECT * from materia,grupo,mat_imparte_grupo where materia.id_materia=mat_imparte_grupo.id_materia AND grupo.id_grupo=mat_imparte_grupo.id_grupo AND 
grupo.id_grupo='$id'");
	$cont=0;
	while($row=$usuarios->fetch_array()) {
		$rows[]=$row;
		$cont=$cont+1;
}
//echo "contador: ".$cont;
	$mysqli->close();
	tm($cont,$rows);
		break;
	default:
		# code...
		break;
}



function tmyg($cont,$rows,$cont1,$rows1)
{
	$html=$html."
<table>
<tr>
	<th>Id Grupo</th>
	<th>Semestre</th>	
</tr>";
if ($cont>0) {
	foreach ($rows as $row) {
 $html=$html."<tr data-id="."id".">".
 "<td><a href="."".">".$row['id_grupo']."</a></td>".
 "<td><a>".$row['Semestre']."</a></td>".
 "</tr>";
}
$html=$html."</table>";


}
	//$html="";
$html1=$html1."
<table>
<tr>
	<th>id_materia</th>
	<th>nombre_mater</th>
	<th>creditos</th>
	<th>semestre</th>
	<th>horas</th>
</tr>";
if ($cont1>0) {
	foreach ($rows1 as $row) {
 $html1=$html1."<tr data-id="."id".">".
 "<td><a href="."".">".$row['id_materia']."</a></td>".
 "<td><a>".$row['nombre_mater']."</a></td>".
 "<td><a>".$row['semestre']."</a></td>".
 "<td><a>".$row['horas']."</a></td>".
 "<td><a>".$row['Am_prof']."</a></td>".
 "</tr>";
}
$html1=$html1."</table>";
}
echo json_encode(array('tab'=>$html,'tab1'=>$html1,'result'=>$cont));
}
function tm($cont,$rows)
{
	
//$html="";
$html=$html."
<table>
<tr>
	<th>Nombre Materia</th>
	<th>Id Materia</th>
</tr>";
if ($cont>0) {
	foreach ($rows as $row) {
 $html=$html."<tr data-id="."id".">".
 "<td><a href="."altaTutores.php".">".$row['nombre_mater']."</a></td>".
 "<td><a href="."".">".$row['id_materia']."</a></td>".
 "</tr>";
#al hacer clic sobre el id materia, se hara una consulta haciendo un join entre materia calificacion y unidad, mostrando solo la ruta de la unidad.
 #hace falta un formulario donde se puede agregar el archivo, especificando un numero de unidad del que se trata.

}
$html=$html."</table>";
}
echo json_encode(array('tab'=>$html,'result'=>$cont));
}


function tAlumno ($cont,$rows)
{

//$html="";
$html=$html."
<table>
<tr>
	<th>Matricula</th>
	<th>Nombre</th>
	<th>Semestre</th>
</tr>";
if ($cont>0) {
	foreach ($rows as $row) {
 $html=$html."<tr data-id="."id".">".
 "<td><a href="."altaTutores.php".">".$row['Matricula']."</a></td>".
 "<td><a>".$row['Nombre']."</a></td>".
 "<td><a>".$row['Semestre']."</a></td>".
 "</tr>";
}
$html=$html."</table>";
}
echo json_encode(array('tab'=>$html,'result'=>$cont));
}
//mostrar las tablas de los prof y mater en la vista grega_mat_prof.php
function tmyp($cont,$rows,$cont1,$rows1)
{	
//$html="";
$html=$html."
<table>
<tr>
	<th>RFC</th>
	<th>Nombre</th>
	<th>Apellido Paterno</th>
	<th>Apellido Materno</th>
</tr>";
if ($cont>0) {
	foreach ($rows as $row) {
 $html=$html."<tr data-id="."id".">".
 "<td><a href="."".">".$row['id_profesor']."</a></td>".
 "<td><a>".$row['nombre_prof']."</a></td>".
 "<td><a>".$row['Ap_prof']."</a></td>".
 "<td><a>".$row['Am_prof']."</a></td>".
 "</tr>";
}
$html=$html."</table>";


}
	//$html="";
$html1=$html1."
<table>
<tr>
	<th>id_materia</th>
	<th>nombre_mater</th>
	<th>creditos</th>
	<th>semestre</th>
	<th>horas</th>
</tr>";
if ($cont1>0) {
	foreach ($rows1 as $row) {
 $html1=$html1."<tr data-id="."id".">".
 "<td><a href="."".">".$row['id_materia']."</a></td>".
 "<td><a>".$row['nombre_mater']."</a></td>".
 "<td><a>".$row['semestre']."</a></td>".
 "<td><a>".$row['horas']."</a></td>".
 "<td><a>".$row['Am_prof']."</a></td>".
 "</tr>";
}
$html1=$html1."</table>";
}
echo json_encode(array('tab'=>$html,'tab1'=>$html1,'result'=>$cont));
}
?>
