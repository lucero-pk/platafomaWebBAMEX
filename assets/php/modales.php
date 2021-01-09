<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO | Datos Generales</title>

                <!--CSS-->
    <link rel="stylesheet" href="../css/style_registroDatosGenerales.css">

                <!--Bootstrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../sweetAlert/sweetalert2.min.css">
    
                <!--Java Script-->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/funciones.js"></script>
    <script src="../sweetAlert/sweetalert2.min.js"></script>

     <!--Jquery-->
     <script src="../js/jquery-3.5.1.min.js"></script>
    
</head>

           
<body>
    <div class="container">
        <div id="tabla"></div>
    </div>
   
        <!-- Modal para registrar nuevos datos -->

<!-- <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Agregar Nuevo Integrante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div> -->

        <!-- Modal para registrar actualizar datos (Editar)-->

        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEdicion">
            Launch demo modal
        </button> -->

<!-- <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->


</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tabla').load('registroDatosGenerales.php')
    });
</script>
<!--Este es el index para mi-->   