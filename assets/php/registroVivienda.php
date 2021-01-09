<?php
#requerimos la conexion
require('conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO | Vivienda</title>

    <!--CSS-->
    <link rel="stylesheet" href="../css/style_registroDatosGenerales.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <!--Java Script-->
    <script src="../js/bootstrap.min.js"></script>

    <!--font-awesome-->
    <link rel="stylesheet" href="../font-awesome/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h4>Estado de la casa y construcción</h4>
        <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6">
                    <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6">
                        <label for="">Tipo de Casa*</label>
                        <select name="tipoCasa" id="tipoCasa" class="form-control">
                            <?php
                                //consulta a la BD para las opciones del select
                                $sql = "SELECT * FROM tbl_tipoCasa";
                                $result = $conex->query($sql);
                                while($t_tipoCasa = mysqli_fetch_array($result)){
                                echo '<option value="'.$t_tipoCasa[id].'">'.$t_tipoCasa[tipoCasa].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6">
                        <label for="">Mayor parte piso*</label>
                        <select name="mayPartePiso" id="mayPartePiso" class="form-control">
                            <?php
                                //consulta a la BD para las opciones del select
                                $sql = "SELECT * FROM tbl_mayorpartepiso";
                                $result = $conex->query($sql);
                                while($t_mayorpartepiso = mysqli_fetch_array($result)){
                                echo '<option value="'.$t_mayorpartepiso[id].'">'.$t_mayorpartepiso[mPartePiso].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6">
                        <label for="">Tenencia*</label>
                        <select name="tenencia" id="tenencia" class="form-control">
                            <?php
                                //consulta a la BD para las opciones del select
                                $sql = "SELECT * FROM tbl_tenencia";
                                $result = $conex->query($sql);
                                while($t_tenencia = mysqli_fetch_array($result)){
                                echo '<option value="'.$t_tenencia[id].'">'.$t_tenencia[tenencia].'</option>';
                                }
                            ?>
                        </select>
                    </div> 
                    <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6">
                        <label for="">Mayor parte techo*</label>
                        <select name="mayParteTecho" id="mayParteTecho" class="form-control">
                            <?php
                                //consulta a la BD para las opciones del select
                                $sql = "SELECT * FROM tbl_mayorpartetecho";
                                $result = $conex->query($sql);
                                while($t_mayorParteTecho = mysqli_fetch_array($result)){
                                echo '<option value="'.$t_mayorParteTecho[id].'">'.$t_mayorParteTecho[mParteTecho].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6">
                        <label for="">Mayor parte muros*</label>
                        <select name="mayParteMuros" id="mayParteMuros" class="form-control">
                            <?php
                                //consulta a la BD para las opciones del select
                                $sql = "SELECT * FROM tbl_mayorpartemuros";
                                $result = $conex->query($sql);
                                while($t_mayorParteMuros = mysqli_fetch_array($result)){
                                echo '<option value="'.$t_mayorParteMuros[id].'">'.$t_mayorParteMuros[mParteMuros].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="card">
                        <br><h4>Caracteristicas</h4>
                        <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6">
                                    <label for="">No. de Cuartos*</label>
                                    <input type="number" name="noCuartos" id="noCuartos" required="" class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6">
                                    <label for="">Cuartos para dormir*</label>
                                    <input type="number" name="cuartosDormir" id="cuartosDormir" required="" class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6">
                                    <label for="">Cocina separada*</label>
                                    <select name="cocinaSeparada" id="cocinaSeparada" class="form-control">
                                        <option value="1">SI</option>
                                        <option value="0">NO</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6">
                                    <label for="">Cuarto de baño exclusivo*</label>
                                    <select name="banioExclusivo" id="banioExclusivo" class="form-control">
                                        <option value="1">SI</option>
                                        <option value="0">NO</option>
                                    </select>
                                </div>                                
                            </div> 
                        </div>
                    </div>  
                    <br>                  
                    <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6">
                        <button type="button" class="btn btn-success">Guardar</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6">
                    <h4>Equipamiento</h4>
                    <div class="row">
                   <!--  <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6"> -->
                        <div class="table-responsive">
                            <div>
                                <table class="table table-responsive textMd" rules="all" style="borde-collapse:collapse;" cellspacing="0" id="tabla">
                                    <tbody>
                                        <tr class="text-center textGd" style="color:Blac; background-color:#FDB913">
                                            <th scope="col">Equipamiento</th>
                                            <th scope="col">Tiene</th>
                                            <th scope="col">Sirve</th>
                                        </tr>
                                        <tr>
                                            <td>Refrigerador</td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="si" id="si" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="no" id="no" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Estufa</td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="si" id="si" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="no" id="no" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Video, DVD, Blue Ray</td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="si" id="si" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="no" id="no" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lavadora</td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="si" id="si" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="no" id="no" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Licuadora</td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="si" id="si" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="no" id="no" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Television</td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="si" id="si" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="no" id="no" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Radio</td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="si" id="si" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="no" id="no" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sala</td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="si" id="si" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="no" id="no" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Comedor</td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="si" id="si" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="no" id="no" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Autómovil</td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="si" id="si" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="no" id="no" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cama</td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="si" id="si" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="no" id="no" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Celular</td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="si" id="si" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="no" id="no" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Motocicleta</td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="si" id="si" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="no" id="no" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Computadora</td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="si" id="si" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="no" id="no" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Horno</td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="si" id="si" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="no" id="no" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Teléfono</td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="si" id="si" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:20%;" align="center">
                                                <div class="input-group mb-1" style="display: flex">
                                                    <div class="input-group-prepend" style="margin-left:0%">
                                                        <select name="no" id="no" class="form-control">
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>