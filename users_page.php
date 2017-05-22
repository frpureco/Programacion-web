<?php
session_start();


if(!$_SESSION['logged']){
    //echo 'Welcome, '.$_SESSION['username'];
    header("Location: login.html");
    exit;
}
header("Location: InfoEntreFormuarios.html");
echo 'Welcome, '.$_SESSION['username'];
?>
