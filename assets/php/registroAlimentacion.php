<?php
//
require('conexion.php');

//consulta para mostrar las preguntas de la tabla preguntasAlimentacion
$sql = "SELECT *  FROM tbl_alimentacionpreguntas";
$sq = $conex->query($sql);
$resultado = $sq->fetch_all(MYSQLI_ASSOC);
//$tot = $sq->num_rows;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO | Alimentación</title>

     <!--Bootstrap-->
     <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <!--Java Script-->
    <script src="../js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-responsive textMd" rules="all" style="borde-collapse:collapse;" cellspacing="0" id="tabla">
                        <thead  class="text-center textGd" style="color:Blac; background-color:#FDB913">
                            <tr>
                                <td>No.</td>
                                <td>EN LOS ULTIMOS 3 MESES, POR FALTA DE DINERO U OTROS RECURSOS</td>
                                <td>SI / NO</td>
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
                                    <select name="pregunta" id="pregunta" class="form-control">
                                        <option value="0">NO</option>
                                        <option value="1">SI</option>
                                    </select>
                                </th>
                           </tr>
                           <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <div>
                    <button type="button" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>