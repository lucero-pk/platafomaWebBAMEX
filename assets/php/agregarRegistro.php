<script src="../sweetAlert/sweetalert2.min.js"></script>

<?php

    require("conexion.php");
    
//Datos generales

    $comunidadPrograma = $_POST['comunidad'];
    $grupo = $_POST['grupo'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];
    $municipio = $_POST['municipio'];
    $localidad = $_POST['localidad'];
    $tipoAsentamiento = $_POST['t_asentamiento'];    
    $nombreAsentamiento = $_POST['n_asentamiento'];
    $tipoViabilidad = $_POST['t_viabilidad'];
    $nombreViabilidad = $_POST['n_viabilidad'];
    $noExt = $_POST['noExterior'];
    $noInt = $_POST['noInterior'];    
    $cp = $_POST['cp'];
    $entreCalles = $_POST['calles'];
    $descripcionUbicacion = $_POST['des_ubicacion'];
    $telefono = $_POST['telefono'];
    

    //servicios
 
    $electricidad = $_POST['electricidad']; 
    $drenaje = $_POST['sanitario']; 
    $banioExcusado = $_POST['banio']; 
    $combustible = $_POST['combustible']; 
    $agua = $_POST['agua']; 
    

    //insertar datos en la tabla tbl_datosGenerales
    $sql_datosGenerales = "INSERT INTO tbl_datosgenerales (id, nombreComProg, grupo, fecha, estado, municipio, localidad, id_asentamiento,
                        nombreAsentamiento, id_viabilidad, nombreViabilidad, noExt, noInt, cp, entreCalles, descUbicacion, telefono) 
                        VALUES (NULL, '$comunidadPrograma', '$grupo', '$fecha', '$estado', '$municipio', '$localidad', 
                        '$tipoAsentamiento', '$nombreAsentamiento', '$tipoViabilidad', '$nombreViabilidad', '$noExt',
                        '$noInt', '$cp', '$entreCalles', '$descripcionUbicacion', '$telefono')";

    $result_datosGenerales = $conex->query($sql_datosGenerales);

     if($result_datosGenerales){
        echo "registro realizado!";
        echo"<script>Swal.fire('Felicidades!', 'El registro se realizo correctamente.', 'success')</script>";    
        echo "<meta http-equiv='Refresh' Content='0;url=registro.php'>";  
    }else{
       echo"<script>Swal.fire('Error', 'Fallo al realizar registro', 'error')</script>";
       echo "error al registrar :(";
    }  

    //------------------------------- insertar datos en tbl_servicios ------------------------------------------
 
    $sql_servicios = "INSERT INTO tbl_servicios (id, id_electricidad, id_sanitario, id_banioExcusado, id_combustible, id_agua)
                        VALUES (NULL, '$electricidad', '$drenaje', '$banioExcusado', '$combustible', '$agua',)";

   $result_servicios = $conex->query($sql_servicios);  

   if($result_servicios){
        echo"<script>Swal.fire('Felicidades!', 'El registro se realizo correctamente.', 'success')</script>";  
        echo "registro exitoso";    
    }else{
        echo"<script>Swal.fire('Error', 'Fallo al realizar registro', 'error')</script>";
        echo "error";
    } 

    /* if($result_datosGenerales && $result_servicios ){
        echo "registro realizado!";
        echo"<script>Swal.fire('Felicidades!', 'El registro se realizo correctamente.', 'success')</script>";    
        echo "<meta http-equiv='Refresh' Content='0;url=registroDatosGenerales.php'>";  
    }else{
        echo"<script>Swal.fire('Error', 'Fallo al realizar registro', 'error')</script>";
        echo "error al registrar :(";
    } 
 */
?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarRegistro').load('registroDatosGenerales.php');
        Swal.fire(
                    'Felicidades!',
                    'Registro agregado correctamente.',
                    'success'
                )
    });
</script>