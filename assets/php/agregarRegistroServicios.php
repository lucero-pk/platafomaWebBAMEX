<?php

    require('conexion.php');

    $electricidad = $_POST['electricidad'];  /* electricidad  sanitario  banio  combustible   agua */
    $drenaje = $_POST['sanitario']; 
    $banio = $_POST['banio']; 
    $combustible = $_POST['combustible']; 
    $agua = $_POST['agua']; 

    $sql_servicios = "INSERT INTO tbl_servicios (id, id_electricidad, id_sanitario, id_banioExcusado, id_combustible, id_agua)
                        VALUES (NULL, '$electricidad', '$drenaje', '$banio', '$combustible', '$agua',)";

   $result_servicios = $conex->query($sql_servicios);  

   if($result_servicios){
       // echo"<script>Swal.fire('Felicidades!', 'El registro se realizo correctamente.', 'success')</script>";  
        echo "registro exitoso";    
    }else{
        //echo"<script>Swal.fire('Error', 'Fallo al realizar registro', 'error')</script>";
        echo "error";
        echo"<script>Swal.fire('Felicidades', 'Error al registrar', 'error')</script>";
    } 
    ?>

                