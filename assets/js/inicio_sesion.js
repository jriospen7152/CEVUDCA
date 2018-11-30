$(document).ready(function(){
    $("button").click(function(){
        iniciar_sesion();
    });
});

function iniciar_sesion(){
    ruta = $("#ruta").val();
    ruta_error = $("#ruta_error").val();
    var data = {
        "usuario": $("#usuario").val(),
        "contrasena": $("#contrasena").val(),
    };

    $.ajax({
        //'url': '/programacion_web/index.php/autenticacion/iniciar_sesion',
        'url': ruta,
        'method': 'POST',
        'data': data,
        'dataType': 'json',
        success: function(data){
            alert(data.mensaje);
            if(data.mensaje != 'Inicio de sesión invalido. Usuario no encontrado'){
                //window.location = '/programacion_web/'
                window.location = ruta_error
            }
        },
        error: function(err){
            console.log(err);
        }
    });
}