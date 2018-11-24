//Función de bienvenida
var cantidad_votos = {carne_conejo:0,cuidado_agua:0,lucha_bacteriana:0};
var colores = ['#74c7b5','#00ffff','#fc784a','#f6e081','#1e3f4a','#9c0000','#ffff00','#0000ff'];

function bienvenida(){
	confirmacion = confirm("Te gustaria personalizar tu experiencia en el CEV de la UDCA");
	if (confirmacion) {
		nombre = prompt("Bienvenido al CEV de la UDCA, nos gustaria personalizar tu experiencia \n ¿Cuál es tu nombre?");
		if (nombre != '' && nombre.length > 5) {
			document.getElementById("titulo").innerHTML = "Hola "+nombre+"! <br> Bienvenido al centro de educación virtual de la UDCA";
		} else {
			alert('El nombre no puede estar vacio y debe tener más de 5 caracteres');
			bienvenida();
		}
	} else {
		alert('Una próxima vez será :D');	
	}
}	

//Manipulación de DOM al dar click en botones de redirección
function redireccion(valor){
	redireccion       = false;
	valor_redireccion = '';
	switch(valor){
		case 'pregrado':
			document.getElementsByClassName('botones_inicio')[0].style.backgroundColor = "red";
			valor_redireccion = "/programacion_web/index.php/cev/proyectos";
			redireccion = true;
		break;
		case 'posgrado':
			document.getElementsByClassName('botones_inicio')[1].style.backgroundColor = "red";
			valor_redireccion = "/programacion_web/index.php/cev/proyectos";
			redireccion = true;
		break;
		case 'ingles':
			document.getElementsByClassName('botones_inicio')[2].style.backgroundColor = "red";
			valor_redireccion = "/programacion_web/index.php/cev/proyectos";
			redireccion = true;
		break;
		default:
			alert('La ruta '+valor+' no existe!');
		break;
	}
	if (redireccion) {
		alert('Serás redirigido a la página destino en 2 segundos');
		setTimeout(function() {window.location.href = valor_redireccion;}, 2000);
	}
}

//Manipulación de DOM al dar click en botones de redirección
function votar(proyecto){
	switch(proyecto){
		case 'carne_conejo':
			cantidad_votos.carne_conejo = cantidad_votos.carne_conejo + 1;
			document.getElementsByClassName('botones_voto')[0].innerHTML = 'Apoya este proyecto '+cantidad_votos.carne_conejo+' votos';
			document.getElementsByClassName('botones_voto')[0].style.backgroundColor = colores[Math.round(Math.random() * (7 - 0) + 0)];
		break;
		case 'cuidado_agua':
			cantidad_votos.cuidado_agua = cantidad_votos.cuidado_agua + 1;
			document.getElementsByClassName('botones_voto')[1].innerHTML = 'Apoya este proyecto '+cantidad_votos.cuidado_agua+' votos';
			document.getElementsByClassName('botones_voto')[1].style.backgroundColor = colores[Math.round(Math.random() * (7 - 0) + 0)];
		break;
		case 'lucha_bacteriana':
			cantidad_votos.lucha_bacteriana = cantidad_votos.lucha_bacteriana + 1;
			document.getElementsByClassName('botones_voto')[2].innerHTML = 'Apoya este proyecto '+cantidad_votos.lucha_bacteriana+' votos';
			document.getElementsByClassName('botones_voto')[2].style.backgroundColor = colores[Math.round(Math.random() * (7 - 0) + 0)];
		break;
		default:
			alert('El proyecto '+proyecto+' no existe!');
		break;
	}
}

function pregunta(){
	bandera_respuesta = false;
	while(bandera_respuesta == false){
		respuesta = prompt("¿A qué facultad esta inscrita la CEV de la UDCA?\n\n  A) Facultad de Artes y Letras\n  B) Facultad de Humanidades y Derecho\n  C) Facultad de Ciencias Jurídicas de la Educación y Sociales\n  D) Facultad de estudios en Ambientes Virtuales");
		if (respuesta.toLowerCase() == 'c'){
			bandera_respuesta = true;
			document.getElementById("texto_pregunta_sobrecsv").style.display = 'block';
		}else{
			alert('Opción incorrecta, intenta de nuevo!');
		}
	}
}