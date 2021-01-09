<?php

/* $conexToAGEEML = new mysqli("localhost","root","","mexico");

if($conexToAGEEML->connect_errno){
    echo "La conexion a la Base de Datos mexico fallo :("; $conexToAGEEML -> connect_errno;
}else{
    echo "La conexion a la Base de Datos mexico se establecio correctamente! :)";
}
$conexToAGEEML -> set_charset("utf8"); */

$mysqli = new mysqli("localhost","root","","mexico"); 
$mysqli->set_charset("utf8");
	
if(mysqli_connect_errno()){
    echo 'Conexion Fallida : ', mysqli_connect_error();
    exit();
}else{
    echo 'conexion establecida :)';
}

?>