<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!--sweetalert js-->
    <script src="../sweetAlert/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../sweetAlert/sweetalert2.min.css">
</head>
<body>
<?php
//requerir conexion.php
/* try {
    require("conexion.php")
} catch (Exception $e) {
    echo('Lo sentimos, Fallo el server :(', $e->getMessage())
} */
/* 
 $con = mysqli_connect('localhost', 'root', '', 'registrosbamex');  */

//Realizar un preregistro

//$id = $_POST[];
$nombre = $_POST["inputNombre"]; 
$primerApp = $_POST["inputApellidoPaterno"];
$segundoApp = $_POST["inputApellidoMaterno"];
$rol = 0; //0 = usuario Normal 
$gmail = $_POST["inputGmail"];
$pwd = $_POST["inputPwd"];

require("conexion.php");
$sql = "INSERT INTO `tbl_registrobamex` (`id`, `name`, `firstApp`, `secondApp`, `rol`, `gmail`, `pwd`) 
        VALUES (NULL, '$nombre ', '$primerApp', '$segundoApp', '$rol', '$gmail', '$pwd')";
//echo mysqli_query($con, $sql);

$result = $conex->query($sql);

 if($result){
    echo"<script>Swal.fire('Felicidades!', 'El registro se realizo correctamente.', 'success')</script>";      
}else{
    echo"<script>Swal.fire('Error', 'Fallo al realizar registro', 'error')</script>";
}  

?>
</body>
</html>


