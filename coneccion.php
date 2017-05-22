<?php
$mysqli=new mysqli('localhost','root','Pureco93900','calificaciones');
if($mysqli->connect_errno):
    echo "error al conectarse a la BD".$mysqli->connect_errno;
else: 
    //echo "no hubo ningun error al conectarse";
endif;
?>