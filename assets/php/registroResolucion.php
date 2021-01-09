<?php
require('conexion.php');

$sql = "SELECT * FROM tbl_otraspreguntas";
$sq = $conex->query($sql);
$resultado = $sq->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO | Resolución</title>

    <!--Bootstrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <!--Java Script-->
    <script src="../js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
            <div class="row">
                <div class="card" style="width: 63rem">
                    <div class="body">
                        <h5 class="card-title">RESOLUCIÓN DEL BANCO DE ALIMENTOS</h5>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-ms-4 col-xs-4">
                                <label for="">Tipo</label>
                                <select name="tipo" id="tipo" class="form-control">
                                    <option value="0">--SELECCIONA</option>
                                <?php
                                    //consulta a la BD para las opciones del select
                                    $sql = "SELECT * FROM tbl_resolucionbamex";
                                    $result = $conex->query($sql);
                                    while($t_tipo = mysqli_fetch_array($result)){
                                    echo '<option value="'.$t_tipo[id].'">'.$t_tipo[tipo].'</option>';
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-ms-4 col-xs-4">
                                <label for="">Frecuencia</label>
                                <select name="frecuencia" id="frecuencia" class="form-control">
                                    <option value="0">--SELECCIONA</option>
                                <?php
                                    //consulta a la BD para las opciones del select
                                    $sql = "SELECT * FROM tbl_resolucionbamex";
                                    $result = $conex->query($sql);
                                    while($t_frecuencia = mysqli_fetch_array($result)){
                                    echo '<option value="'.$t_frecuencia[id].'">'.$t_frecuencia[frecuencia].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-ms-4 col-xs-4">
                                <label for="">Duración</label>
                                <select name="duracion" id="duracion" class="form-control">
                                    <option value="0">--SELECCIONA</option>
                                <?php
                                    //consulta a la BD para las opciones del select
                                    $sql = "SELECT * FROM tbl_resolucionbamex";
                                    $result = $conex->query($sql);
                                    while($t_duracion = mysqli_fetch_array($result)){
                                    echo '<option value="'.$t_duracion[id].'">'.$t_duracion[duracion].'</option>';
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <!--Mostrar las preguntas optativas-->
                <div class="table-responsive">
                    <table class="table table-responsive textMd" rules="all" style="borde-collapse:collapse;" cellspacing="0" id="tabla">
                        <thead class="text-center textGd" style="color:Blac; background-color:#FDB913">
                            <tr>
                                <td>No.</td>
                                <td>OTRAS PREGUNTAS</td>
                                <td>RESPUESTA</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($resultado as $fila):
                            ?>
                                <tr>
                                    <th><?php echo $fila['id']?></th>
                                    <th><?php echo $fila['pregunta']?></th>
                                    <th>
                                        <input type="number" name="respuesta" id="respuesta" class="form-control">
                                    </th>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <span style="color:red">Nota:</span><p style="color:red">En caso de que SI cuente con sistema recolector de basera solo ingrese numero <span>1</span> y en caso contrario coloque un <span>0</span>  </p>
                    </div>
                        <button type="button" class="btn btn-success">Guardar y Finalizar Registro</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>