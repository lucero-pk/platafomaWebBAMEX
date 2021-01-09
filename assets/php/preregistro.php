<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0"-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PREREGISTRO-BAMEX</title>
    <link rel="icon" href="../favicon/bamexLogo.png">

    <!-- css & bootstrap.min -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_preregistro.css">
  
    <!-- jquery, bootstrap.min & boottrap.bundle -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>

    <!--sweetalert js-->
    <script src="../sweetAlert/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../sweetAlert/sweetalert2.min.css">

    <!-- script ajax del preregistro -->
    <!-- <script src="../ajax/alta_preregistro_ajax.js"></script> -->
    <!-- <script src="ajax.js"></script> --> 
    
</head>
<body>
    <!-- Loader Start -->
    <div class="css-loader">
        <div class="loader-inner line-scale d-flex align-items-center justify-content-center"></div>
    </div>
    <!-- Loader End -->
    <!-- Header Start -->
    <header class="position-absolute w-100">
        <div class="container">            
            <nav class="navbar navbar-expand-md navbar-light">
                <img src="../images/bamxEdomexIcon.jpg">
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><h3>Banco de alimentos del Estado de México</h3></li>
                </div>
            </nav>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <div class="col">
                <form id="form" class="form-register" method="POST" action="alta_preregistro.php">
                        <div class="from-row">
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-6">
                                    <label for="inputNombre">Nombre*</label>
                                    <input type="text" class="form-control" name="inputNombre" id="inputNombre" placeholder="Nombre" required>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-6">
                                    <label for="inputApellidoPaterno">Apellido Paterno*</label>
                                    <input type="text" class="form-control" name="inputApellidoPaterno" id="inputApellidoPaterno" placeholder="Apellido Paterno" required>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">                               
                                <div class="col col-lg-6">
                                    <label for="inputApellidoMaterno">Apellido Materno*</label>
                                    <input type="text" class="form-control" name="inputApellidoMaterno" id="inputApellidoMaterno" placeholder="Apellido Materno" required>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-6">
                                    <label for="inputGmail">Correo electronico*</label>
                                    <input type="email" class="form-control" name="inputGmail" id="inputGmail" placeholder="Correo electronico" required>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-6">
                                    <label for="inputPwd">Contraseña*</label>
                                    <input type="password" class="form-control" name="inputPwd" id="inputPwd" placeholder="Contraseña" required>
                                </div>  
                            </div>                                
                        </div>
                        <!--<input type="submit" value="enviar">-->
                        <br>
                        <div class="buttons">
                            <!-- <button onclick="Registrar()" id="btnGuardar" class="btn btn-primary">Guardar</button> -->
                            <button id="btnGuardar" onclick="" class="btn btn-primary">Guardar</button>
                            <button type="submit" class="btn btn-danger">Cancelar</button> 
                            <input type="button" class="btn btn-primary" value="registrar">
                            <!-- <a href="alta_preregistro.php" class="btn btn-primary" role="button" aria-pressed="true">Registrar</a> -->
                            <!--<a href="../../index.html" class="btn btn-primary" role="button" aria-pressed="true">Salir</a>-->                    
                        </div>
                </form> 
                <div id="respuesta"></div> 
            </div>          
        </div>
    </section>
</body>
</html>

<!--script de ajax-->
<script type="text/javascript">
         /* $(document).ready(function(){
            $('#btnGuardar').click(function(){
                var datos = $('#form').serialize();

          //  alert(datos);
          // return false;

                $.ajax({
                    type: "POST",
                    url: "alta_preregistro.php",
                    data: datos,
                    succes: function(data){
                        var mensaje = "";
                        if(data.status == 'succes'){
                            mensaje = alert("registro correcto");
                              Swal.fire(
                                 'Felicidades!',
                                 'El registro se realizo correctamente',
                                 'succes'
                             ) 
                        }else if(data.status == 'error'){
                            mensaje = alert("error al registrar");
                              Swal.fire({
                                 icon: 'error', 
                                 title: 'Error',
                                 text: 'Algo fallo al realizar registro'
                             }) 
                        }
                        //$("#respuesta").html("<p><strong>" + mensaje + "</strong></p>");
                    }
                });
                //return false;
            });
        }); */ 
</script>
