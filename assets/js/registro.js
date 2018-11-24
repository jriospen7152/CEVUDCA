
$(document).ready(function(){
    $("button").click(function(){
        registrar();
    });
});

function registrar(){

    var data = {
        "usuario": $("#usuario").val(),
        "contrasena": $("#contrasena").val(),
        "nombre": $("#nombre").val(),
        "apellido": $("#apellido").val(),
        "edad": $("#edad").val(),
        "correo_electronico": $("#correo_electronico").val(),
    };

    $.ajax({
        'url': '/programacion_web/index.php/autenticacion/registrar',
        'method': 'POST',
        'data': data,
        'dataType': 'json',
        success: function(data){
            if(data.resultado == 'completado'){
                alert("El registro se almaceno correctamente.");
                window.location = '/programacion_web/index.php/autenticacion/login';
            }else{
                alert("Ocurrio un error al intentar crear el registro.");
                alert(data.mensaje);
            }
        },
        error: function(err){
            console.log(err);
        }
    });
}