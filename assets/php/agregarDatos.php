<?php

    //require("cenxion.php");
    require("conexion.php");
    //nombre, primerApp, segundoApp, sexo, fechNaci, entidadNaci, curp, id_estadoCivil, id_parentesco;
    
    $nombre = $_POST['nombre'];  
    $primerApp = $_POST['primerApellido'];
    $segundoApp = $_POST['segundoApellido'];
    $sexo = $_POST['sexo'];
    $date = $_POST['fechaNaci'];
    $entidadNaci = $_POST['entidadNacimiento'];
    $curp = $_POST['curp'];
    $id_estadoCivil = $_POST['estadoCivil'];
    $id_parentesco = $_POST['parentesco'];

    $sql = "INSERT INTO tbl_estructurafamiliar (id, nombre, primerApp, segundoApp, sexo, fechNaci, entidadNaci, curp, id_estadoCivil, id_parentesco)
                VALUES (NULL,'$nombre','$primerApp','$segundoApp','$sexo','$date','$entidadNaci','$curp','$id_estadoCivil', '$id_parentesco')";

    $result = $conex->query($sql);
    if($result){
        //echo"<script>Swal.fire('Felicidades!', 'El registro se realizo correctamente.', 'success')</script>";      
    }else{
       // echo"<script>Swal.fire('Error', 'Fallo al realizar registro', 'error')</script>";
    } 
?>