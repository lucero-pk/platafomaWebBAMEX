<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO | Economía</title>

    <!--CSS-->
    <link rel="stylesheet" href="../css/style_registroEconomia.css">

     <!--Bootstrap-->
     <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <!--Java Script-->
    <script src="../js/bootstrap.min.js"></script>

    <!--font-awesome-->
    <link rel="stylesheet" href="../font-awesome/font-awesome.min.css">

</head>
<body class="body">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6">
                <div>
                    <table class="tabla table-bordered">
                        <thead class="text-center textGd" style="color:Blac; background-color:#FDB913">
                            <tr>
                                <th colspan=6>Aportacion Semanal</th>
                            </tr>
                            <tr>
                                <th scope="col">Concepto</th>
                                <th scope="col">Importe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Padre</th>
                                <th><input type="text" name="padre" id="padre" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Madre</th>
                                <th><input type="text" name="madre" id="madre" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Hijos</th>
                                <th><input type="text" name="hijos" id="hijos" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>PROSPERA</th>
                                <th><input type="text" name="prospera" id="prospera" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Adultos mayores PROSPERA</th>
                                <th><input type="text" name="adultosProspera" id="adultosProspera" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Becas</th>
                                <th><input type="text" name="becas" id="becas" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>otros</th>
                                <th><input type="text" name="otros" id="otros" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Pensión</th>
                                <th><input type="text" name="Pension" id="Pension" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Total Semanal</th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>Total mensual</th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-ms-6 col-xs-6">
                <div>
                    <table class="tabla table-bordered">
                        <thead class="text-center textGd" style="color:Blac; background-color:#FDB913">
                            <tr>
                                <th colspan=6>Egreso Semanal</th>
                            </tr>
                            <tr>
                                <th scope="col">Concepto</th>
                                <th scope="col">Importe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Vivienda</th>
                                <th><input type="text" name="vivienda" id="vivienda" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Alimentación</th>
                                <th><input type="text" name="alimentacion" id="alimentacion" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Luz</th>
                                <th><input type="text" name="luz" id="luz" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Gas</th>
                                <th><input type="text" name="gas" id="gas" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Agua</th>
                                <th><input type="text" name="agua" id="agua" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Teléfono</th>
                                <th><input type="text" name=telefono id=telefono placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Transporte</th>
                                <th><input type="text" name="transporte" id="transporte" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Atención Médica</th>
                                <th><input type="text" name="atencionMedica" id="atencionMedica" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Otros Gastos</th>
                                <th><input type="text" name="otrosGastos" id="otrosGastos" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Celular</th>
                                <th><input type="text" name="celular" id="celular" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Educación</th>
                                <th><input type="text" name="educacion" id="educacion" placeholder="0" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Total Semanal</th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>Total mensual</th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
                <div>
                    <table class="tabla table-bordered">
                        <thead class="text-center textGd" style="color:Blac; background-color:#FDB913">
                            <tr>
                                <td colspan="2">Apoyos en especie</td>
                            </tr>  
                        </thead> 
                        <tbody>
                            <tr>
                                <th>Tipo de apoyo</th>
                                <th><input type="text" name="tipoApoyo" id="tipoApoyo" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Quien lo proporciona</th>
                                <th><input type="text" name="quienProporciona" id="quienProporciona" class="form-control"></th>
                            </tr>
                            <tr>
                                <th>Frecuencia de apoyo</th>
                                <th><input type="text" name=frecApoyo id="frecApoyo" class="form-control"></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-10 col-md-10 col-ms-10 col-xs-10">
                <div>
                    <table class="tabla table-bordered">
                        <thead class="text-center textGd" style="color:Blac; background-color:#FDB913">
                            <tr>
                                <td colspan="2">Remesas</td>
                            </tr>  
                        </thead> 
                        <tbody>
                            <tr>
                                <th>Recibe remesas</th>
                                <th>
                                    <select name="siNo" id="siNo" class="form-control">
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th>¿Alguien en el hogar recibe dinero proveniente de otrod paises?</th>
                                <th>
                                    <select name="siNo" id="siNo" class="form-control">
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th>Frecuencia de apoyo</th>
                                <th><input type="text" name="frecuenciaApoyo" id="frecuenciaApoyo" class="form-control"></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-ms-2 col-xs-2">
                <button type="button" class="btn btn-success text-left">Guardar</button>
            </div>
        </div> 
    </div>    
</body>
</html>