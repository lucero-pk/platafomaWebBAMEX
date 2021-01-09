//ajax para el alta de un usuario
/* window.onload = function(){
    Cargar();
}
 */
$(function(){
    $("#btnGuardar").click(function(){
        var nombre = $("#inputNombre").val();
        var apellidoPater = $("#inputApellidoPaterno").val();
        var apellidoMater = $("#inputApellidoMaterno").val();
        var gmail = $("#inputGmail").val();
        var pwd = $("#inputPwd").val();

        $.ajax({
            type: "POST",
            url: "alta_preregistro.php",
           // data: {name: nombre, primerApellido: apellidoPater, segundoApellido: apellidoMater, correo:gmail, password:pwd},
            data: "inputNombre="+nombre+"&inputApellidoPaterno="+apellidoPater+"&inputApellidoMaterno="+apellidoMater+"&inputGmail="+gmail+"&inputPwd"+pwd,
            succes: function(dataresponse, statustext, response){
                var mensaje = "";
                if(dataresponse === "ok"){
                    mensaje = "Registro guardado! :)";
                }else{
                    mensaje = "Error al guardar registro :(" + dataresponse;
                }
                $("#respuesta").html("<p><strong>" + mensaje + "</strong></p>");

               // Limpiar();
            },
            error: function(request, errorcode, errortext){
                $("#respuesta").html("<p>Ocurrio un error: <strong>" + errortext + "</strong></p>");
            }           
        });
    });
});

/* 
function Registrar(){ 
    var nombre = $("#inputNombre").val();
    var apellidoPater = $("#inputApelidoPaterno").val();
    var apellidoMater = $("#inputApellidoMaterno").val();
    var gmail = $("#inputGmail").val();
    var pwd = $("#inputPwd").val();

    //inicia ajax
    $.ajax({
        type: "POST",
        url: "alta_preregistro.php",
        data: "inputNombre="+nombre+"&inputApellidoPaterno="+apellidoPater+"&inputApellidoMaterno="+apellidoMater+"&inputGmail="+gmail+"&inputPwd"+pwd,
        succes: function(r){
            if(r){
                alert("se agrego correctamente");
            }else{
                alert("fallo al agregar");
            }

            Limpiar();
        }
    });
}
 */
//limpiar los campos
/* function Limpiar(){
    $("#inputNombre").val("");
    $("#inputApellidoPaterno").val("");
    $("#inputApellidpMaterno").val("");
    $("#inputGmail").val("");
    $("#inputPwd").val("");
} */