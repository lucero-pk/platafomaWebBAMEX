<?php
    //conexion a la base de datos
    require("conexion.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO | Datos Generales</title>
    
    <!--CSS-->
    <link rel="stylesheet" href="../css/style_registroDatosGenerales.css">    
    <link rel="stylesheet" href="../sweetAlert/sweetalert2.min.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-icons.css"> 
    
    <!--Java Script-->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/funciones.js"></script>
    <script src="../sweetAlert/sweetalert2.min.js"></script>
     <!--Jquery-->
    <script src="../js/jquery-3.5.1.min.js"></script>

    <!--font-awesome-->
    <link rel="stylesheet" href="../font-awesome/font-awesome.min.css">

</head>
<body id="body">
    <div class="container">
        <div class="col">
            <form id="form" action="" class="form-register" method="POST">
                <div class="form-row">
                    <div class="col-xls-12 col-lg-12 col-md-12 col-sm-12 text-center">
                        <!-- <h1>tabla dinamica</h1> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
            <div class="tab-content">
                <!--Contenido de todas las pestañas-->
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6">
                        <h6 class="card-title">Estructura Familiar</h6>
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-4 col-sm-4">
                        <label class="textGd" for="">Integrantes:</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-6 col-sm-6">
                        <caption>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">Agregar Nuevo
                                <i class="bi bi-align-bottom"></i>
                            </button>
                        </caption>
                        <!-- <label class="textGd" for="">Agregar Integrante</label>
                        <a href="#" target="_blank">
                            <span class="fa fa-plus" aria-hidden="true" title="Agregar mas integrantes de familia"></span>
                        </a> -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 text-left">
                        <label class="textGd" for="">Consultar CURP</label>
                        <a href="https://www.gob.mx/curp/" target="_blank">
                            <span class="fa fa-question-circle" aria-hidden="true" title="Sin no recuerdas tu CURP, click en el enlace para consultarla"></span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive" id="tablaRegistro">
                        <div>
                            <table class="table table-responsive textMd table-condensed table-hover table-bordered" rules="all" style="borde-collapse:collapse;" cellspacing="0" id="tabla">
                                <tbody>
                                    <tr class="text-center textGd" style="color:Blac; background-color:#FDB913">
                                        <th scope="col" align="center">No.</th>
                                        <th scope="col">Nombre*</th>
                                        <th scope="col">PrimerApellido*</th>
                                        <th scope="col">SegundoApellido*</th>
                                        <th scope="col">Sexo*</th>
                                        <th scope="col">F.Nacimiento*</th>
                                        <th scope="col">Entidad Nacimiento*</th>
                                        <th scope="col">Tarjeta de Identidad*</th>
                                        <th scope="col">Estado Civil*</th> 
                                        <th scope="col">Parentesco*</th>                                       
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <span class="text-center textGd" style="width:3%;"> 1</span>
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-minus-circle" aria-hidden="true" title="Eliminar Integrante"></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td style="width:20%;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <input type="text" name="nombre1" id="nombre1" class="form-control textMd formCtrlESN" placeholder="" required>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:20;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <input type="text" name="primerApelido" id="primerApelido" class="form-control textMd formCtrlESN" placeholder="" required>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:20;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <input type="text" name="segundoApelido" id="segundoApelido" class="form-control textMd formCtrlESN" placeholder="" required>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:50;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <select name="sexo1" id="sexo1" class="form-control textMd formCtrlESN" >
                                                        <option value="1">Mujer</option>
                                                        <option value="0">Hombre</option>
                                                    </select>
                                                    <!-- <input type="text" name="s" id="segundoApelido" class="form-control" placeholder="PrimerApellido" required> -->
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:10;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <input type="date" name="date" id="date" class="form-control textMd formCtrlESN" placeholder="" required>
                                                </div>
                                            </div>
                                        </td> 
                                        <td style="width:10;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <input type="text" name="entidadNacimiento1" id="entidadNacimiento1" class="form-control textMd formCtrlESN" placeholder="" required>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:100;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <input type="text" name="curp1" id="curp1" class="form-control textMd formCtrlESN" placeholder="" required>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:10;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <select name="estadoCivil1" id="estadoCivil1" class="form-control">
                                                        <!-- <option value="0">-Seleccione</option> -->
                                                        <?php
                                                            //require("conexion.php")
                                                            $sql = "SELECT * FROM tbl_estadocivil";
                                                            $result = $conex->query($sql);
                                                            while($t_estadoCivil = mysqli_fetch_array($result)){
                                                                echo '<option value="'.$t_estadoCivil[id].'">'.$t_estadoCivil[estadoCivil].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                   <!--  <input type="text" name="estado civil" id="curp" class="form-control textMd formCtrlESN" placeholder="" required> -->
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:10;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <select name="parentesco1" id="parentesco1" class="form-control">
                                                        <!-- <option value="0">-Seleccione</option> -->
                                                        <?php
                                                            //require("conexion.php")
                                                            $sql = "SELECT * FROM tbl_parentesco";
                                                            $result = $conex->query($sql);
                                                            while($t_parentesco = mysqli_fetch_array($result)){
                                                                echo '<option value="'.$t_parentesco[id].'">'.$t_parentesco[parentesco].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                   <!--  <input type="text" name="estado civil" id="curp" class="form-control textMd formCtrlESN" placeholder="" required> -->
                                                </div>
                                            </div>
                                        </td>                                     
                                    </tr>                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--ESCOLARIDAD / SEGURIDAD SOCIAL-->
                <div class="">
                    <h2>Escolaridad / Seguridad Social</h2>
                    <div class="row">
                    <div class="table-responsive">
                        <div>
                            <table class="table table-responsive textMd" rules="all" style="borde-collapse:collapse;" cellspacing="0" id="tabla">
                                <tbody>
                                    <tr class="text-center textGd" style="color:Blac; background-color:#FDB913">
                                        <th scope="col" align="center">No.</th>
                                        <th scope="col">Escolaridad*</th>
                                        <th scope="col">Grado*</th>
                                        <th scope="col">Asiste a la escuela*</th>
                                        <th scope="col">Ocupacion*</th>
                                        <th scope="col">Tipo empleo*</th>
                                        <th scope="col">Prestaciones laborales*</th>
                                        <th scope="col">Jubilacion o pensionado*</th>
                                        <th scope="col">Dercho habiencia*</th> 
                                        <th scope="col">Motivo derecho habiencia*</th>                                       
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <span class="text-center textGd" style="width:3%;"> 1</span>
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-minus-circle" aria-hidden="true" title="Eliminar Integrante"></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td style="width:20%;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <select name="escolaridad" id="escolaridad" class="form-control">
                                                            <!-- <option value="0">-Seleccione</option> -->
                                                            <?php
                                                                //require("conexion.php")
                                                                $sql = "SELECT * FROM tbl_escolaridad";
                                                                $result = $conex->query($sql);
                                                                while($t_escolaridad = mysqli_fetch_array($result)){
                                                                    echo '<option value="'.$t_escolaridad[id].'">'.$t_escolaridad[escolaridad].'</option>';
                                                                }
                                                            ?>
                                                        </select>
                                                    <!-- <input type="text" name="nombre" id="nombre" class="form-control textMd formCtrlESN" placeholder="" required> -->
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:20;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <input type="number" name="grado" id="grado" class="form-control textMd formCtrlESN" placeholder="" required>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:20;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">                                                    
                                                     <select name="asistenciaEscuela" id="asistenciaEscuela" class="form-control">
                                                        <option value="0">Si</option>
                                                        <option value="1">No</option>
                                                     </select>
                                                    <!-- <input type="text" name="segundoApellido" id="segundoApelido" class="form-control textMd formCtrlESN" placeholder="" required> -->
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:50;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <select name="ocupacion" id="ocupacion" class="form-control">
                                                         <!-- <option value="0">-Seleccione</option> -->
                                                            <?php
                                                                //require("conexion.php")
                                                                $sql = "SELECT * FROM tbl_ocupacion";
                                                                $result = $conex->query($sql);
                                                                while($t_ocupacion = mysqli_fetch_array($result)){
                                                                    echo '<option value="'.$t_ocupacion[id].'">'.$t_ocupacion[ocupacion].'</option>';
                                                                }
                                                            ?>
                                                    </select>
                                                    <!-- <input type="text" name="s" id="segundoApelido" class="form-control" placeholder="PrimerApellido" required> -->
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:10;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <select name="tipoEmpleo" id="tipoEmpleo" class="form-control">
                                                        <!-- <option value="0">-Seleccione</option> -->
                                                            <?php
                                                                //require("conexion.php")
                                                                 $sql = "SELECT * FROM tbl_tipoempleo";
                                                                $result = $conex->query($sql);
                                                                while($t_tipoEmpleo = mysqli_fetch_array($result)){
                                                                    echo '<option value="'.$t_tipoEmpleo[id].'">'.$t_tipoEmpleo[tipoEmpleo].'</option>';
                                                                }
                                                            ?>
                                                    </select>
                                                    <!-- <input type="date" name="date" id="date" class="form-control textMd formCtrlESN" placeholdeTIr="" required> -->
                                                </div>
                                            </div>
                                        </td> 
                                        <td style="width:10;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <select name="prestacionesLaborales" id="prestacionesLaborales" class="form-control">
                                                        <!-- <option value="0">-Seleccione</option> -->
                                                            <?php
                                                                //require("conexion.php")
                                                                $sql = "SELECT * FROM tbl_prestacioneslaborales";
                                                                $result = $conex->query($sql);
                                                                while($t_prestLaborales = mysqli_fetch_array($result)){
                                                                    echo '<option value="'.$t_prestLaborales[id].'">'.$t_prestLaborales[prestLaborales].'</option>';
                                                                }
                                                            ?>
                                                    </select>
                                                   <!--  <input type="text" name="entidadNacimiento" id="entidadNacimiento" class="form-control textMd formCtrlESN" placeholder="" required> -->
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:100;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <select name="jubilacionPensionado" id="jubilacionPensionado" class="form-control">
                                                        <option value="0">Si</option>
                                                        <option value="1">No</option>
                                                    </select>
                                                    <!-- <input type="text" name="curp" id="curp" class="form-control textMd formCtrlESN" placeholder="" required> -->
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:10;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <select name="derechoHabiencia" id="derechoHabiencia" class="form-control">
                                                        <!-- <option value="0">-Seleccione</option> -->
                                                        <?php
                                                            //require("conexion.php")
                                                            $sql = "SELECT * FROM tbl_derechohabiencia";
                                                            $result = $conex->query($sql);
                                                            while($t_derechohabiencia = mysqli_fetch_array($result)){
                                                                echo '<option value="'.$t_derechohabiencia[id].'">'.$t_derechohabiencia[derechoHabiencia].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                   <!--  <input type="text" name="estado civil" id="curp" class="form-control textMd formCtrlESN" placeholder="" required> -->
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:10;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <select name="motivoDH" id="motivoDH" class="form-control">
                                                    <?php
                                                        //require("conexion.php")
                                                        $sql = "SELECT * FROM tbl_motivoderechohabiecia";
                                                        $result = $conex->query($sql);
                                                        while($motivoDH = mysqli_fetch_array($result)){
                                                            echo '<option value="'.$motivoDH[id].'">'.$motivoDH[motivoDH].'</option>';
                                                            }
                                                    ?>
                                                    </select>
                                                   <!--  <input type="text" name="estado civil" id="curp" class="form-control textMd formCtrlESN" placeholder="" required> -->
                                                </div>
                                            </div>
                                        </td>                                     
                                    </tr>                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
                <!--SALUD / PERTENENCIA PUEBLO INDIGENA-->
                <div class="">
                    <h2>Salud / Pertenencia Pueblo Indigena</h2>
                    <div class="row">
                    <div class="table-responsive">
                        <div>
                            <table class="table table-responsive textMd" rules="all" style="borde-collapse:collapse;" cellspacing="0" id="tabla">
                                <tbody>
                                    <tr class="text-center textGd" style="color:Blac; background-color:#FDB913">
                                        <th scope="col" align="center">No.</th>
                                        <th scope="col">Discapacidad*</th>
                                        <th scope="col">Condiciones de Salud*</th>
                                        <th scope="col">Adicciones*</th>
                                        <th scope="col">Peso*</th>
                                        <th scope="col">Talla*</th>
                                        <th scope="col">IMC*</th>
                                        <th scope="col">Pueblo Indigena*</th>                                      
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <span class="text-center textGd" style="width:3%;"> 1</span>
                                                <a href="#" target="_blank">
                                                    <span class="fa fa-minus-circle" aria-hidden="true" title="Eliminar Integrante"></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td style="width:20%;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <select name="capacidadesDiferentes" id="capacidadesDiferentes" class="form-control">
                                                            <!-- <option value="0">-Seleccione</option> -->
                                                            <?php
                                                                //require("conexion.php")
                                                                $sql = "SELECT * FROM tbl_capacidadesdiferentes";
                                                                $result = $conex->query($sql);
                                                                while($t_capacidadesDiferentes = mysqli_fetch_array($result)){
                                                                    echo '<option value="'.$t_capacidadesDiferentes[id].'">'.$t_capacidadesDiferentes[capacidadesDif].'</option>';
                                                                }
                                                            ?>
                                                        </select>
                                                    <!-- <input type="text" name="nombre" id="nombre" class="form-control textMd formCtrlESN" placeholder="" required> -->
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:50;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <select name="condicionesSalud" id="condicionesSalud" class="form-control">
                                                         <!-- <option value="0">-Seleccione</option> -->
                                                            <?php
                                                                //require("conexion.php")
                                                                $sql = "SELECT * FROM tbl_condicionesdesalud";
                                                                $result = $conex->query($sql);
                                                                while($t_condicionesSalud = mysqli_fetch_array($result)){
                                                                    echo '<option value="'.$t_condicionesSalud[id].'">'.$t_condicionesSalud[condicionesSalud].'</option>';
                                                                }
                                                            ?>
                                                    </select>
                                                    <!-- <input type="text" name="s" id="segundoApelido" class="form-control" placeholder="PrimerApellido" required> -->
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:10;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <select name="adicciones" id="adicciones" class="form-control">
                                                        <!-- <option value="0">-Seleccione</option> -->
                                                            <?php
                                                                //require("conexion.php")
                                                                 $sql = "SELECT * FROM tbl_adicciones";
                                                                $result = $conex->query($sql);
                                                                while($t_adicciones = mysqli_fetch_array($result)){
                                                                    echo '<option value="'.$t_adicciones[id].'">'.$t_adicciones[adicciones].'</option>';
                                                                }
                                                            ?>
                                                    </select>
                                                    <!-- <input type="date" name="date" id="date" class="form-control textMd formCtrlESN" placeholdeTIr="" required> -->
                                                </div>
                                            </div>
                                        </td> 
                                        <td style="width:10;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <input type="text" name="peso" id="peso" class="form-control textMd formCtrlESN" placeholder="" required>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:100;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <input type="text" name="talla" id="talla" class="form-control textMd formCtrlESN" placeholder="" required>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:10;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <input type="text" name="imc" id="imc" class="form-control textMd formCtrlESN" placeholder="" required>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:10;" align="center">
                                            <div class="input-group mb-2" style="display: flex">
                                                <div class="input-group-prepend" style="margin-left:0%">
                                                    <select name="puebloIndigena" id="puebloIndigena" class="form-control">
                                                        <!-- <option value="0">-Seleccione</option> -->
                                                        <?php
                                                            //require("conexion.php")
                                                            $sql = "SELECT * FROM tbl_puebloindigena";
                                                            $result = $conex->query($sql);
                                                            while($t_puebloindigena = mysqli_fetch_array($result)){
                                                                echo '<option value="'.$t_puebloindigena[id].'">'.$t_puebloindigena[puebloIndigena].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                   <!--  <input type="text" name="estado civil" id="curp" class="form-control textMd formCtrlESN" placeholder="" required> -->
                                                </div>
                                            </div>
                                        </td>                                     
                                    </tr>                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--Boton pra registrar-->
                <div>
                     <button type="button" name="guardarDatosGenerales" id="guardarDatosGenerales" class="btn btn-success">Guardar</button>
                </div>
                </div>
            </div>
        </div>
     </div>
<!-- ------------------------------------------------------------------------------------------------------------------------- -->
                                    <!--Modal para registrar nuevo integrante-->
<!-- ------------------------------------------------------------------------------------------------------------------------- -->
    <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgba(26, 10, 56, 0.80); color:#fff;">
                    <h4 class="modal-title" id="myModalLabel">Agregar nuevo integrante</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                   
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">                                            
                    <h5>Datos Generales</h5><br>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-ms-3 col-xs-3">
                                <div>
                                    <label for="">Nombre*</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control textMd formCtrlESN" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-ms-3 col-xs-3">
                                <div>
                                    <label for="">PrimerApellido*</label>
                                    <input type="text" name="primerApellido" id="primerApellido" class="form-control textMd formCtrlESN" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-ms-3 col-xs-3">
                                <div>
                                    <label for="">SegundoApellido*</label>
                                    <input type="text" name="segundoApellido" id="segundoApellido" class="form-control textMd formCtrlESN" placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">                        
                            <div class="col-lg-3 col-md-3 col-ms-3 col-xs-3">
                                <div>
                                    <label for="">Sexo*</label>
                                    <select name="sexo" id="sexo" class="form-control" required="">
                                        <option value="1">Mujer</option>
                                        <option value="0">Hombre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-ms-3 col-xs-3">
                                <label for="">Fecha</label>
                                <input type="date" name="fechaNaci" id="fechaNaci" value="2021-01-01" min="1921-01-01" max="2021-12-31" class="form-control textMd formCtrlESN" placeholder="">
                            </div>
                            <div class="col-lg-3 col-md-3 col-ms-3 col-xs-3"> 
                                <label for="">EntidadNacimiento</label>
                                <input type="text" name="entidadNacimiento" id="entidadNacimiento" class="form-control textMd formCtrlESN" placeholder="">
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-ms-3 col-xs-3">
                                <label for="">CURP</label>
                                <input type="text" name="curp" id="curp" maxlength="18" class="form-control textMd formCtrlESN" placeholder="">
                            </div>
                            <div class="col-lg-3 col-md-3 col-ms-3 col-xs-3">
                                <label for="">Estado Civil</label>
                                <select name="estadoCivil" id="estadoCivil" class="form-control">
                                    <?php
                                        $sql = "SELECT * FROM tbl_estadocivil";
                                        $result = $conex->query($sql);
                                        while($t_estadoCivil = mysqli_fetch_array($result)){
                                            echo '<option value="'.$t_estadoCivil[id].'">'.$t_estadoCivil[estadoCivil].'</option>';
                                            }
                                    ?>
                                </select>                            
                            </div>
                            <div class="col-lg-3 col-md-3 col-ms-3 col-xs-3">
                                <label for="">Parentesco</label>
                                <select name="parentesco" id="parentesco" class="form-control">
                                    <?php
                                        $sql = "SELECT * FROM tbl_parentesco";
                                        $result = $conex->query($sql);
                                        while($t_parentesco = mysqli_fetch_array($result)){
                                            echo '<option value="'.$t_parentesco[id].'">'.$t_parentesco[parentesco].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--inicia el div de escolaridad/seguridad social-->
                    <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
                        <br><h5>Escolaridad / Seguridad Social</h5><br>
                        <div class="row">                            
                            <div class="col-lg-5 col-md-5 col-ms-5 col-xs-5">
                                <label for="">Escolaridad*</label>
                                <select name="escolaridadM" id="escolaridadM" class="form-control">
                                    <!-- <option value="0">-Seleccione</option> -->
                                        <?php
                                            //require("conexion.php")
                                            $sql = "SELECT * FROM tbl_escolaridad";
                                            $result = $conex->query($sql);
                                            while($t_escolaridad = mysqli_fetch_array($result)){
                                                echo '<option value="'.$t_escolaridad[id].'">'.$t_escolaridad[escolaridad].'</option>';
                                            }
                                         ?>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-2 col-ms-2 col-xs-2">
                                <label for="">Grado*</label>
                                <input type="number" class="form-control" name="gradoM" id="gradoM" required=""> 
                            </div>
                            <div class="col-lg-5 col-md-5 col-ms-5 col-xs-5">
                                <label for="">Asiste a la escuela*</label>
                                <select name="aistenciaEscuelaM" id="aistenciaEscuelaM" class="form-control">
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-ms-4 col-xs-4">
                                <label for="">Ocupacion*</label>
                                <select name="ocupacionM" id="ocupacionM" class="form-control">
                                <!-- <option value="0">-Seleccione</option> -->
                                    <?php
                                        //require("conexion.php")
                                        $sql = "SELECT * FROM tbl_ocupacion";
                                        $result = $conex->query($sql);
                                        while($t_ocupacion = mysqli_fetch_array($result)){
                                            echo '<option value="'.$t_ocupacion[id].'">'.$t_ocupacion[ocupacion].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-ms-4 col-xs-4">
                                <label for="">Tipo empleo*</label>
                                <select name="tipoEmpleoM" id="tipoEmpleoM" class="form-control">
                                    <!-- <option value="0">-Seleccione</option> -->
                                    <?php
                                    //require("conexion.php"4
                                        $sql = "SELECT * FROM tbl_tipoempleo";
                                        $result = $conex->query($sql);
                                        while($t_tipoEmpleo = mysqli_fetch_array($result)){
                                            echo '<option value="'.$t_tipoEmpleo[id].'">'.$t_tipoEmpleo[tipoEmpleo].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-ms-4 col-xs-4">
                                <label for="">Prestaciones Laborales*</label>
                                <select name="prestacionesLaboralesM" id="prestacionesLaboralesM" class="form-control">
                                    <?php
                                        $sql = "SELECT * FROM tbl_prestacioneslaborales";
                                        $result = $conex->query($sql);
                                        while($t_prestLaborales = mysqli_fetch_array($result)){
                                            echo '<option value="'.$t_prestLaborales[id].'">'.$t_prestLaborales[prestLaborales].'</option>';
                                        }
                                        ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-ms-4 col-xs-4">
                                <label for="">Jubilacion o pensionado*</label>
                                <select name="jubilacionPensionadoM" id="jubilacionPensionadoM" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-ms-4 col-xs-4">
                                <label for="">Derecho Habiencia*</label>
                                <select name="derechoHabienciaM" id="derechoHabienciaM" class="form-control">
                                    <?php
                                        $sql = "SELECT * FROM tbl_derechohabiencia";
                                        $result = $conex->query($sql);
                                        while($t_derechohabiencia = mysqli_fetch_array($result)){
                                            echo '<option value="'.$t_derechohabiencia[id].'">'.$t_derechohabiencia[derechoHabiencia].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-ms-4 col-xs-4">
                                <label for="">Motivo Derecho Habiencia*</label>
                                <select name="motivoDHM" id="motivoDHM" class="form-control">
                                    <?php
                                        $sql = "SELECT * FROM tbl_motivoderechohabiecia";
                                        $result = $conex->query($sql);
                                        while($t_motivoDH = mysqli_fetch_array($result)){
                                            echo '<option value="'.$t_motivoDH[id].'">'.$t_motivoDH[motivoDH].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div> <!--Termina el div de escolaridad/seguridad social-->

    <!------------------------------------------------------------------------------------------------------>

                    <!--Inicia el div de salud/pertenencia puebo indigena-->
                    <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
                    <br><h5>Salud / Pertenencia Pueblo Indigena</h5><br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-ms-4 col-xs-4">
                                <label for="">Discapacidad*</label>
                                <select name="capacidadesDiferentesM" id="capacidadesDiferentesM" class="form-control">
                                    <?php
                                        $sql = "SELECT * FROM tbl_capacidadesdiferentes";
                                        $result = $conex->query($sql);
                                        while($t_capacidadesDiferentes = mysqli_fetch_array($result)){
                                            echo '<option value="'.$t_capacidadesDiferentes[id].'">'.$t_capacidadesDiferentes[capacidadesDif].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-ms-4 col-xs-4">
                                <label for="">Condiciones de salud*</label>
                                <select name="condicionesSaludM" id="condicionesSaludM" class="form-control">
                                    <?php
                                        $sql = "SELECT * FROM tbl_condicionesdesalud";
                                        $result = $conex->query($sql);
                                        while($t_condicionesSalud = mysqli_fetch_array($result)){
                                            echo '<option value="'.$t_condicionesSalud[id].'">'.$t_condicionesSalud[condicionesSalud].'</option>';
                                        }
                                        ?>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-ms-4 col-xs-4">
                                <label for="">Adicciones*</label>
                                <select name="adiccionesM" id="adiccionesM" class="form-control">
                                    <?php
                                        $sql = "SELECT * FROM tbl_adicciones";
                                        $result = $conex->query($sql);
                                        while($t_adicciones = mysqli_fetch_array($result)){
                                            echo '<option value="'.$t_adicciones[id].'">'.$t_adicciones[adicciones].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-ms-2 col-xs-2">
                                <label for="">Peso*</label>
                                <input type="number" name="pesoM" id="pesoM" class="form-control" required="">
                            </div>
                            <div class="col-lg-2 col-md-2 col-ms-2 col-xs-2">
                                <label for="">Talla*</label>
                                <input type="number" name="tallaM" id="tallaM" class="form-control" required="">
                            </div>
                            <div class="col-lg-2 col-md-2 col-ms-2 col-xs-2">
                                <label for="">IMC*</label>
                                <input type="text" name="imcM" id="imcM" class="form-control" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6">
                                <label for="">Pueblo Indigena</label>                                
                                <select name="puenloIndigenaM" id="puenloIndigenaM" class="form-control">
                                    <?php
                                        $sql = "SELECT * FROM tbl_puebloindigena";
                                        $result = $conex->query($sql);
                                        while($t_puebloindigena = mysqli_fetch_array($result)){
                                            echo '<option value="'.$t_puebloindigena[id].'">'.$t_puebloindigena[puebloIndigena].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div><!--Termina el div de salud/pertenencia pueblo indigena-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="guardarNuevo">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>

<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('#tablaRegistro').load('modales.php');
    });
</script> -->
<!--para mi esta es mi Tabla, los modales van en el index-->


<script type="text/javascript">
    $(document).ready(function(){
        $("#guardarNuevo").click(function(){
            //nombr1=$('#nombre').val();
            nombre=$('#nombre').val(); 
            primerApellido=$('#primerApellido').val();
            segundoApellido=$('#segundoApellido').val(); 
            sexo=$('#sexo').val();
            fechaNaci=$('#fechaNaci').val();
            entidadNacimiento=$('#entidadNacimiento').val();
            curp=$('#curp').val();
            estadoCivil=$('#estadoCivil').val();
            parentesco=$('#parentesco').val();
                //agregardatos (nombreM, primerApellidoM, segundoApellidoM, sexoM, dateM, entidadNacimientoM, curpM, estadoCivilM, parentescoM)
               // agregardatos (nombre, primerApellido, segundoApellido, sexo, fechaNaci, entidadNacimiento, curp, estadoCivil, parentesco);
                //agregardatos (name, primerApellido, segundoApellido, sexo, date, entidadDeNaci, curpM, estadoCivil, parentesco);
                agregardatos (nombre, primerApellido, segundoApellido, sexo, fechaNaci, entidadNacimiento, curp, estadoCivil, parentesco);
                //agregardatos (nombre, primerApellido, segundoApellido, sexo, fechaNaci, entidadNacimiento, curp, estadoCivil, parentesco)
                
        });
    });
</script>

<!-- Scrip para aguardar los datos generales de la tablas 
        * Estructura Familiar
        * Escolaridad / seguridad social
        * Salud / Pertenencia pueblo indigena
*  -->

<!-- ajax -->
<!-- <script type="text/javascript">
    $(document).ready(function (){
        $("#guardarDatosGenerales").click(function(){
            /* tabla de estructura Familiar */
            nombre=$('#nombre').val();
            primerApellido=$('#primerApellido').val();
            segundoApellido=$('#segundoApellido').val();
            sexo=$('#sexo').val();
            date=$('#date').val();
            entidadNacimiento=$('#entidadNacimiento').val();
            curp=$('#curp').val();
            estadoCivil=$('#estadoCivil').val();
            parentesco=$('#parentesco').val();

                agregarDatosGenerales (nombre, primerApellido, segundoApellido, sexo, date, entidadNacimiento, curp, estadoCivil, parentesco);
            
            /* Tabla de escolaridad Seguridad Social */
            escolaridad=$('#escolaridad').val();
            grado=$('#grado').val();
            asistenciaEscuela=$('#asistenciaEscuela').val();
            ocupacion=$('#ocupacion').val();
            tipoEmpleo=$('#tipoEmpleo').val();
            prestacionesLaborales=$('#prestacionesLaborales').val();
            jubilacionPensionado=$('#jubilacionPensionado').val();
            derechoHabiencia=$('#derechoHabiencia').val();
            motivoDH=$('#motivoDH').val();

            /* Tabla de Salud Pertenencia / PuebloIndigena */
            capacidadesDiferentes=$('#capacidadesDiferentes').val();
            condicionesSalud=$('#condicionesSalud').val();
            adicciones=$('#adicciones').val();
            peso=$('#peso').val();
            talla=$('#talla').val();
            imc=$('#imc').val();
            puebloIndigena=$('#puebloIndigena').val();

               
        });
    });

</script> -->