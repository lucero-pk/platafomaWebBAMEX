<?php
    //registro de los datos del apartado Estructura Familiar
    
    require("conexion.php")
    
    //estructura Familiar 

    $nombre=$_POST['nombre'];
    $primerApellido=$_POST['primerApellido'];
    $segundoApellido=$_POST['segundoApellido'];
    $sexo=$_POST['sexo'];
    $date=$_POST['date'];
    $entidadNacimiento=$_POST['entidadNacimiento'];
    $curp=$_POST['curp'];
    $estadoCivil=$_POST['estadoCivil'];
    $parentesco=$_POST['parentesco'];
    
    $sql = "INSERT INTO tbl_estructurafamiliar (id, nombre, primerApp, segundoApp, sexo, fechNaci, entidadNaci, curp, id_estadoCivil, id_parentesco)
    VALUES (NULL,'$nombre','$primerApp','$segundoApp','$sexo','$fechNaci','$entidadNaci','$curp','$id_estadoCivil', '$id_parentesco')";
?>