function agregardatos (nombre, primerApellido, segundoApellido, sexo, fechaNaci, entidadNacimiento, curp, estadoCivil, parentesco){
    cadena = "nombre=" + nombre +
                    "&primerApellido=" + primerApellido + 
                    "&segundoApellido=" + segundoApellido +
                    "&sexo=" + sexo +
                    "&fechaNaci=" + fechaNaci +
                    "&entidadNacimiento=" + entidadNacimiento +
                    "&curp=" + curp +
                    "&estadoCivil=" + estadoCivil +
                    "&parentesco=" + parentesco;

    /*ajax*/

    $.ajax({
        type:"POST",
        url:"../php/agregarDatos.php",
        data:cadena,
        success:function(r){
            if(r==1){
               // $('#tabla').load('../php/modales.php');
               $('#tabla').load('registroDatosGenerales.php');
                Swal.fire(
                    'Felicidades!',
                    'Registro agregado correctamente.',
                    'success'
                )
            } else{
                Swal.fire(
                    'Error al registrar',
                    'Lo sentimos, Servidor no disponible.',
                    'error'
                )
            }
        }
    });
}

/*-----------------funcion para guardar los datos generales en la tabla tbl_datos generales de la BD principal---------------------*/

/* function agregardatosGenerales (comunidadPrograma, grupo, fecha, estado, municipio, localidad, tipoAsentamiento, nombreAsentamiento, 
    tipoViabilidad, nombreViabilidad, noExt, noInt, cp, entreCalles, descripcionUbicacion, telefono){
    cadena = "comunidadPrograma=" + comunidadPrograma +
                    "&grupo=" + grupo + 
                    "&fecha=" + fecha +
                    "&estado=" + estado +
                    "&municipio=" + municipio +
                    "&localidad=" + localidad +
                    "&tipoAsentamiento=" + tipoAsentamiento +
                    "&nombreAsentamiento=" + nombreAsentamiento +
                    "&tipoViabilidad=" + tipoViabilidad;
                    "&nombreViabilidad=" + nombreViabilidad;
                    "&noExt=" + noExt;
                    "&noInt=" + noInt;
                    "&cp=" + cp;
                    "&entreCalles=" + entreCalles;
                    "&descripcionUbicacion=" + descripcionUbicacion;
                    "&telefono=" + telefono;

    /*ajax*/

   /*  $.ajax({
        type:"POST",
        url:"../php/registroEstructuraFamiliar.php",
        data:cadena,
        success:function(r){
            if(r==1){
               // $('#tabla').load('../php/modales.php');
               $('#tabla').load('registroDatosGenerales.php');
                Swal.fire(
                    'Felicidades!',
                    'Registro agregado correctamente.',
                    'success'
                )
            } else{
                Swal.fire(
                    'Error al registrar',
                    'Lo sentimos, Servidor no disponible.',
                    'error'
                )
            }
        }
    });  */

 /* Funcion para agregar los datos del formulario Estructura familiar, Escolaridad/SeguridadSocial, 
    salud/PertenenciaPuebloIndigena a sus respectivas tablas de la BD registrosbamex*/

function agregarDatosGenerales (nombre, primerApellido, segundoApellido, sexo, date, entidadNacimiento, curp, estadoCivil, parentesco){
    cadena = "nombre=" + nombre +
                    "&primerApellido=" + primerApellido + 
                    "&segundoApellido=" + segundoApellido +
                    "&sexo=" + sexo +
                    "&date=" + date +
                    "&entidadNacimiento=" + entidadNacimiento +
                    "&curp=" + curp +
                    "&estadoCivil=" + estadoCivil +
                    "&parentesco=" + parentesco;

    /*ajax*/

    $.ajax({
        type:"POST",
        url:"../php/registroEstructuraFamiliar.php",
        data:cadena,
        success:function(r){
            if(r==1){
               // $('#tabla').load('../php/modales.php');
               $('#tabla').load('registroDatosGenerales.php');
                Swal.fire(
                    'Felicidades!',
                    'Registro agregado correctamente.',
                    'success'
                )
            } else{
                Swal.fire(
                    'Error al registrar',
                    'Lo sentimos, Servidor no disponible.',
                    'error'
                )
            }
        }
    });
}


/* function agregardatosGenerales (comunidadPrograma, grupo, fecha, estado, municipio, localidad, tipoAsentamiento, nombreAsentamiento, 
    tipoViabilidad, nombreViabilidad, noExt, noInt, cp, entreCalles, descripcionUbicacion, telefono){
    cadena = "comunidadPrograma=" + comunidadPrograma +
                    "&grupo=" + grupo + 
                    "&fecha=" + fecha +
                    "&estado=" + estado +
                    "&municipio=" + municipio +
                    "&localidad=" + localidad +
                    "&tipoAsentamiento=" + tipoAsentamiento +
                    "&nombreAsentamiento=" + nombreAsentamiento +
                    "&tipoViabilidad=" + tipoViabilidad;
                    "&nombreViabilidad=" + nombreViabilidad;
                    "&noExt=" + noExt;
                    "&noInt=" + noInt;
                    "&cp=" + cp;
                    "&entreCalles=" + entreCalles;
                    "&descripcionUbicacion=" + descripcionUbicacion;
                    "&telefono=" + telefono;

    //--------------------------------ajax---------------------------------

    $.ajax({
        type:"POST",
        url:"../php/agregarRegistro.php",
        data:cadena,
        success:function(r){
            if(r==1){
               // $('#tabla').load('../php/modales.php');
               $('#tabla').load('registroDatosGenerales.php');
                Swal.fire(
                    'Felicidades!',
                    'Registro agregado correctamente.',
                    'success'
                )
            } else{
                Swal.fire(
                    'Error al registrar',
                    'Lo sentimos, Servidor no disponible.',
                    'error'
                )
            }
        }
    });
} */