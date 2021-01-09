//ajax para el alta de un usuario
window.onload = function(){
    Cargar();
}

function Registrar(){
    var nombre = $("#inputNombre").val();
    var apellidoPater = $("#inputApelidoPaterno").val();
    var apellidoMater = $("#inputApellidoMaterno").val();
    var gmail = $("#inputGmail").val();
    var pwd = $("#inputPwd").val();

    //inicia ajax
    $.ajax({
        type: "POST",
        url: "../php/alta_preregistro.php",
        data: "inputNombre=" + nombre + "&inputApellidoPaterno=" + apellidoPater + 
                "&inputApellidoMaterno=" + apellidoMater + "&inputGmail=" + gmail + "&inputPwd" + pwd,
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

//limpiar los campos
function Limpiar(){
    $("#inputNombre").val("");
    $("#inputApellidoPaterno").val("");
    $("#inputApellidpMaterno").val("");
    $("#inputGmail").val("");
    $("#inputPwd").val("");
}