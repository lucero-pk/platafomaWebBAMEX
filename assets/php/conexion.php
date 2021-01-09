<?php
//conexion a la BD registrosbamex

$conex = new mysqli("localhost","root","","registrosbamex");
    
if ($conex -> connect_errno) {
    echo "La conexion fallo :("; $conex -> connect_errno;
} else {
    echo "Conexion establecida :)";
}
$conex -> set_charset("utf8");

?>


