<?php
//conexion php
require("conexion.php");

//conexion a la BD AGEEML2020
require("conexionEdos.php");

$sql = "SELECT id_estado, estado FROM t_estado ORDER BY estado";
$result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO | BAMEX</title>
    <link rel="stylesheet" href="../css/style_registro.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <!--Java Script-->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../sweetAlert/sweetalert2.min.js"></script>
    <script src="../js/funciones.js"></script>

    <!--font-awesome-->
    <link rel="stylesheet" href="../font-awesome/font-awesome.min.css">

    <!--Jquery-->
    <script src="../js/jquery-3.5.1.min.js"></script>

    <!--Scrip para cargar el formulario externo  registroDatosGenerales.php-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#btn_EstructuraFamiliar').on('click', function() {
                $("#central").load('registroDatosGenerales.php');
                return false;
            });      
        });
    </script>

    <!--Scrip para cargar el formulario de vivienda-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#btn_Vivienda').on('click', function() {
                $("#central").load('registroVivienda.php');
                return false;
            });      
        });
    </script>

    <!--Script para cargar el formulario de Economia-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#btn_Economia').on('click', function() {
                $("#central").load('registroEconomia.php');
                return false;
            });      
        });
    </script>

    <!--script para cargar el formulario de Alimentación-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#btn_Alimentacion').on('click', function() {
                $("#central").load('registroAlimentacion.php');
                return false;
            });      
        });
    </script>

    <!--script para cargar el formulario de Resolución-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#btn_Resolucion').on('click', function() {
                $("#central").load('registroResolucion.php');
                return false;
            });      
        });
    </script>

    <!--script para cargar datos generales (Este formulario)-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#btn_DatosGenerales').on('click', function() {
                $("#central").load('registro.php');
                return false;
            });      
        });
    </script>

<!---------------------------------------------------------------------------------------------------------
    Script para los combox select dinamicos 
        > Estados
        > Municipios
        > Comunidades       
----------------------------------------------------------------------------------------------------------->
   <!--  <script language="javascript">
        $(document).ready(function(){
            $("#estado").change(function () {
                $("#localidad").find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
                $("#estado option:selected").each(function () {
                    id = $(this).val();
                    $.post("includes/getMunicipio.php", { id: id }, function(data){
                        $("#municipio").html(data);
                    });
                });
            })
        });

        $(document).ready(function(){
            $("#municipio").change(function (){
                $("#municipio option:selected").each(function () {
                    id = $(this).val();
                    $.post("includes/getLocalidades.php", { id:id }, function(data){
                        $("#localidad").html(data);
                    });
                });
            })
        });
    </script> -->
    <script language="javascript" src="js/jquery-3.1.1.min.js"></script>
		
		<script language="javascript">
			$(document).ready(function(){
				$("#estado").change(function () {
 
					$('#localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
					
					$("#estado option:selected").each(function () {
						id_estado = $(this).val();
						$.post("includes/getMunicipio.php", { id_estado: id_estado }, function(data){
							$("#municipio").html(data);
						});            
					});
				})
			});
			
			$(document).ready(function(){
				$("#municipio").change(function () {
					$("#municipio option:selected").each(function () {
						id_municipio = $(this).val();
						$.post("includes/getLocalidades.php", { id_municipio: id_municipio }, function(data){
							$("#localidad").html(data);
						});            
					});
				})
			});
		</script>

    
</head>
<body>
    <header class="position-absolute w-100">
        <div class="container">            
            <nav class="navbar navbar-expand-md navbar-light">
                <img src="../images/bamxEdomexIcon.jpg">
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><h3>Banco de alimentos del Estado de México</h3>
                    </li>
                </div>
            </nav>
        </div>
    </header>
    <!-- <div > -->

    </div>
    <div class="card" id="titulo">
        <div class="card-header">
            <h5 class="card-title"></h5>
            <div class="title">
                <div class="row">
                    <div class="col-xls-6 col-lg-6 col-md-6 col-sm-6 text-left"><h1>Registrar Estudio Socio-Nutricio</h1></div>
                    <div class="col-xls-4 col-lg-4 col-md-4 col-sm-4 text-center"></div>
                    <div class="col-xls-2 col-lg-2 col-md-2 col-sm-2 text-right">
                        <a href="../../index.html" id="enlaceSalir" class="fa fa-arrow-right" aria-hidden="true" title="Salir"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <!--pestañas--->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-header" style="background-color: rgba(240, 6, 6, 0.911)">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item form-inliner">
                                <a href="#" class="nav-link" id="btn_DatosGenerales">
                                    <strong style="font-size:14px; color: #fff;">1. Datos generales</strong>
                                </a>                                
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" id="btn_EstructuraFamiliar">
                                    <strong style="font-size:14px; color: #fff;">2. Estructura Fmiliar</strong>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" id="btn_Vivienda">
                                    <strong style="font-size:14px; color: #fff;">3. Vivienda</strong>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" id="btn_Economia">
                                    <strong style="font-size:14px; color: #fff;">4. Economía</strong>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" id="btn_Alimentacion">
                                    <strong style="font-size:14px; color: #fff;">5. Alimentación</strong>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" id="btn_Resolucion">
                                    <strong style="font-size:14px; color: #fff;">6. Resolución</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="central">
        <div class="col">
            <form id="form" action="agregarRegistro.php" method="POST" class="form-register"> <!--agregarRegistro.php-->
                <div class="form-row">
                    <div class="col-xls-4 col-lg-4 col-md-4 col-sm-4 text-center">
                        <label for="">Comunidad o programa*</label>
                        <input type="text" class="form-control" name="comunidad" id="comunidad" required>
                    </div>
                    <div class="col-xls-4 col-lg-4 col-md-4 col-sm-4 text-center">
                        <label for="">Grupo*</label>
                        <input type="text" class="form-control" name="grupo" id="grupo" required>
                    </div>
                    <div class="col-xls-4 col-lg-4 col-md-4 col-sm-4 text-center">
                        <label for="">Fecha*</label>
                        <input type="date" class="form-control" name="fecha" id="fecha">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-xls-3 col-lg-3 col-md-3 col-sm-3 text-center">
                        <label for="">Estado*</label>
                        <!-- <input type="text" class="form-control" name="estado" id="estado" required> -->
                        <select name="estado" id="estado" class="form-control">
                            <option value="0">--SELECCIONA ESTADO</option>
                            <?php while($row = $result->fetch_assoc()) { ?>
                                <option value="<?php echo $row['id_estado'];?>"><?php echo $row['estado']; ?></option>                                
                            <?php  } ?>                            
                        </select>
                    </div>
                    <div class="col-xls-3 col-lg-3 col-md-3 col-sm-3 text-center">
                        <label for="">Municipio*</label>
                        <!-- input type="text" class="form-control" name="municipio" id="municipio" required> -->
                        <select name="municipio" id="municipio" class="form-control">
                            <option value="0">--SELECCIONA MUNICIPIO</option>
                        </select>
                    </div>
                    <div class="col-xls-3 col-lg-3 col-md-3 col-sm-3 text-center">
                        <label for="">Localidad*</label>
                        <!-- <input type="text" class="form-control" name="localidad" id="localidad" required> -->
                        <select name="localidad" id="localidad" class="form-control">
                            <option value="0">--SELECCIONA LOCALIDAD</option>
                        </select>
                    </div>
                    <div class="col-xls-3 col-lg-3 col-md-3 col-sm-3 text-center">
                        <label for="">C.P*</label>
                        <input type="number" class="form-control" name="cp" id="cp" min="6" required>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-xls-4 col-lg-4 col-md-4 col-sm-4 text-center">
                        <label for="">T. Asentamiento*</label>
                        <select class="form-control" name="t_asentamiento" id="t_asentamiento">
                            <option value="0">--SELECCIONE ASENTAMIENTO</option>
                            <?php 
                               // require("conexion.php");
                                $sql = "SELECT *  FROM tbl_tipoasentamiento";                                
                                $result = $conex->query($sql);
                                while($t_asentamiento = mysqli_fetch_array($result)){
                                    echo '<option value="'.$t_asentamiento[id].'">'.$t_asentamiento[name].'</option>';
                                }
                            ?>
                        </select>
                        <!-- <input type="text" class="form-control" name="t_asentamietno" id="t_asentamiento" required> -->
                    </div>
                    <div class="col-xls-4 col-lg-4 col-md-4 col-sm-4 text-center">
                        <label for="">Nombre Asentamietno*</label>
                        <input type="text" class="form-control" name="n_asentamiento" id="n_asentamiento" required>
                    </div>
                    <div class="col-xls-4 col-lg-4 col-md-4 col-sm-4 text-center">
                        <label for="">Tipo Viabilidad*</label>
                        <select class="form-control" name="t_viabilidad" id="t_viabilidad">
                            <option value="0">--SELECCIONE VIABILIDAD</option>
                                <?php
                                    //require("conexion.php")
                                    $sql = "SELECT * FROM tbl_tipoviabilidad";
                                    $result = $conex->query($sql);
                                    while($t_viabilidad = mysqli_fetch_array($result)){
                                        echo '<option value="'.$t_viabilidad[id].'">'.$t_viabilidad[name].'</option>';
                                    }
                                ?>
                        </select>
                        <!-- <input type="text" class="form-control" name="t_viabilidad" id="t_viabilidad" required> -->
                    </div>
                </div>
                <br>
                <div class=form-row>
                    <div class="col-xls-6 col-lg-6 col-md-6 col-sm-6 text-center">
                        <label for="">Nombre Viabilidad*</label>
                        <input type="text" class="form-control" name="n_viabilidad" id="n_viabilidad" required>
                    </div>
                    <div class="col-xls-3 col-lg-3 col-md-3 col-sm-3 text-center">
                        <label for="">No. Ext*</label>
                        <input type="number" class="form-control" name="noExterior" id="noExterior" required>
                    </div>
                    <div class="col-xls-3 col-lg-3 col-md-3 col-sm-3 text-center">
                        <label for="">No. Int*</label>
                        <input type="number" class="form-control" name="noInterior" id="noInterior" required>
                    </div>
                </div>
                <br>
                <div class=form-row>
                    <div class="col-xls-4 col-lg-4 col-md-4 col-sm-4 text-center">
                        <label for="">Entre Calles*</label>
                        <input type="text" class="form-control" name="calles" id="calles" required>
                    </div>
                    <div class="col-xls-4 col-lg-4 col-md-4 col-sm-4 text-center">
                        <label for="">Descripción Ubicación*</label>
                        <input type="text" class="form-control" name="des_ubicacion" id="des_ubicacion" required>
                    </div>
                    <div class="col-xls-4 col-lg-4 col-md-4 col-sm-4 text-center">
                        <label for="">Telefono*</label>
                        <input type="numbre" class="form-control" name="telefono" id="telefono" required>
                    </div>
                </div>
                <div><br>
                    <p style="background-color:red">Servicios</p>
                </div><br>
                <div class="form-row">
                    <div class="col-xls-4 col-lg-4 col-md-4 col-sm-4 text-center">
                        <label for="">Electricidad</label>
                        <select class="form-control" name="electricidad" id="electricidad">
                            <option value="0">--SELECCIONE</option>
                            <?php
                                    //require("conexion.php")
                                    $sql = "SELECT * FROM tbl_electricidad";
                                    $result = $conex->query($sql);
                                    while($t_electricidad = mysqli_fetch_array($result)){
                                        echo '<option value="'.$t_electricidad[id].'">'.$t_electricidad[electricida].'</option>';
                                    }
                                ?>
                        </select>
                        <!-- <input type="text" class="form-control" name="electricidad" id="electricidad" required> -->
                    </div>
                    <div class="col-xls-4 col-lg-4 col-md-4 col-sm-4 text-center">
                        <label for="">Drenaje</label>
                        <select class="form-control" name="sanitario" id="sanitario">
                            <option value="0">--SELECCIONE</option>
                            <?php
                                    //require("conexion.php")
                                    $sql = "SELECT * FROM tbl_sanitario";
                                    $result = $conex->query($sql);
                                    while($t_sanitario = mysqli_fetch_array($result)){
                                        echo '<option value="'.$t_sanitario[id].'">'.$t_sanitario[sanitario].'</option>';
                                    }
                                ?>
                        </select>
                        <!-- <input type="text" class="form-control" name="drenaje" id="drenaje" required> -->
                    </div>
                    <div class="col-xls-4 col-lg-4 col-md-4 col-sm-4 text-center">
                        <label for="">Baño o Escusado</label>
                        <select class="form-control" name="banio" id="banio">
                            <option value="0">--SELECCIONE</option>
                            <?php
                                    //require("conexion.php")
                                    $sql = "SELECT * FROM tbl_banioexcusado";
                                    $result = $conex->query($sql);
                                    while($t_banio = mysqli_fetch_array($result)){
                                        echo '<option value="'.$t_banio[id].'">'.$t_banio[banioExcusado].'</option>';
                                    }
                                ?>
                        </select>
                        <!-- <input type="text" class="form-control" name="banio" id="banio" required> -->
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-xls-4 col-lg-4 col-md-4 col-sm-4 text-center">
                        <label for="">Combustible</label>
                        <select class="form-control" name="combustible" id="combustible">
                            <option value="0">--SELECCIONE</option>
                            <?php
                                    //require("conexion.php")
                                    $sql = "SELECT * FROM tbl_combustible";
                                    $result = $conex->query($sql);
                                    while($t_combustible = mysqli_fetch_array($result)){
                                        echo '<option value="'.$t_combustible[id].'">'.$t_combustible[combustible].'</option>';
                                    }
                                ?>
                        </select>
                        <!-- <input type="text" class="form-control" name="combustible" id="combustible" required> -->
                    </div>
                    <div class="col-xls-4 col-lg-4 col-md-4 col-sm-4 text-center">
                        <label for="">Agua</label>
                        <select class="form-control" name="agua" id="agua">
                            <option value="0">--SELECCIONE</option>
                            <?php
                                    //require("conexion.php")
                                    $sql = "SELECT * FROM tbl_agua";
                                    $result = $conex->query($sql);
                                    while($t_agua = mysqli_fetch_array($result)){
                                        echo '<option value="'.$t_agua[id].'">'.$t_agua[agua].'</option>';
                                    }
                                ?>
                        </select>
                       <!--  <input type="text" class="form-control" name="agua" id="agua" required> -->
                    </div>
                    <div class="col-xls-4 col-lg-4 col-md-4 col-sm-4 text-center">
                        <!-- <button id="btnGuardar" onclick="" class="btn btn-primary">Guardar</button> -->
                        <!-- <button type="submit" class="btn btn-outline-success">Guardar</button> -->
                        <input type="submit" class="btn btn-outline-success" name="guardarRegistro" id="guardarRegistro" value="Guardar" required="">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br> 
    <footer class="footer">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 copyright text-center">
                <p class="copyright"> <br> 2020 ©BAMEX, Banco de Alimentos Caritas del Estado de México I.A.P.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                <a href="https://www.facebook.com/bancosdealimentosMX" target="_blank" class="copyright" id="enlace">
                    <span class="fa fa-facebook-square" aria-hidden="true" title=""></span> 
                 </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left">
                <a href="#" target="_blank" class="copyright" id="enlace">
                    <span class="fa fa-twitter-square" aria-hidden="true" title=""></span>
                </a>
            </div>
            <br>
        </div>
    </footer>
</body>
</html>



<!-- scrip para alamcenar los datos del formulario en la tabla tbl_datosGenerales de la BD principal -->

<!-- <script type="text/javascript">
    $(document).ready(function(){
        $("#guardarRegistro").click(function(){
            comunidadPrograma = $('#comunidad').val();
            grupo = $('#grupo').val();
            fecha = $('#fecha').val();
            estado = $('#estado').val();
            municipio = $('#municipio').val();
            localidad = $('#localidad').val();
            tipoAsentamiento = $('#t_asentamiento').val();    
            nombreAsentamiento = $('#n_asentamiento').val();
            tipoViabilidad = $('#t_viabilidad').val();
            nombreViabilidad = $('#n_viabilidad').val();
            noExt = $('#noExterior').val();
            noInt = $('#noInterior').val();    
            cp = $('#cp').val();
            entreCalles = $('#calles').val();
            descripcionUbicacion = $('#des_ubicacion').val();
            telefono = $('#telefono').val();

            function agregardatosGenerales (comunidadPrograma, grupo, fecha, estado, municipio, localidad, tipoAsentamiento, nombreAsentamiento, 
                                            tipoViabilidad, nombreViabilidad, noExt, noInt, cp, entreCalles, descripcionUbicacion, telefono)

                
        });
    });

</script> -->