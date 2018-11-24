$(document).ready(function(){
    $("button").click(function(){
        iniciar_sesion();
    });
});

function iniciar_sesion(){

    var data = {
        "usuario": $("#usuario").val(),
        "contrasena": $("#contrasena").val(),
    };

    $.ajax({
        'url': '/programacion_web/index.php/autenticacion/iniciar_sesion',
        'method': 'POST',
        'data': data,
        'dataType': 'json',
        success: function(data){
            alert(data.mensaje);
            if(data.mensaje != 'Inicio de sesión invalido. Usuarip no encontrado'){
                window.location = '/programacion_web/'
            }
        },
        error: function(err){
            console.log(err);
        }
    });
}