<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INICIO | Centro de educación virtual de la UDCA</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
</head>
<body onload="bienvenida()">
    <header>
        <img class="logo" src="<?php echo base_url(); ?>assets/images/CEV.png" />
        <h1 id="titulo">Bienvenido al centro de educación virtual de la UDCA</h1>
    </header>
    <section id="navegacion">
        <nav>
            <ul class="menu_navegacion">
                <li>
                    <a class="botones_nav" href="/programacion_web/">Inicio</a>
                </li>
                <li>
                    <a class="botones_nav" href="/programacion_web/index.php/cev/proyectos">Proyectos</a>
                </li>
                <li>
                    <a class="botones_nav" href="/programacion_web/index.php/cev/recursos">Recursos</a>
                </li>
                <li>
                    <a class="botones_nav" href="/programacion_web/index.php/cev/sobrecev">Sobre el CEV</a>
                </li>
                <li>
                    <a class="botones_nav" href="/programacion_web/index.php/cev/servicio">Servicio</a>
                </li>
                <li>
                    <a class="botones_nav" href="/programacion_web/index.php/cev/contactanos">Contáctanos</a>
                </li>
                <?php
	    			if($this->session->userdata('usuario') != null){
                        $usuario = $this->session->userdata('usuario');
                        echo '<li><a class="botones_nav" href="#" disabled="disabled">Usuario: ' . $usuario["usuario"] . '</a></li>';
                        echo '<li><a class="botones_nav" href="/programacion_web/index.php/autenticacion/cerrar_sesion/">Cerrar Sesión</a></li>';
                    }else{
                        echo '<li><a class="botones_nav" href="/programacion_web/index.php/autenticacion/login/">Iniciar Sesión</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </section>
    <div id="contenedor">
        <section id="cuerpo">
            <div id="slider">
                <img src="<?php echo base_url(); ?>assets/images/inicio.jpeg" alt="imagen de inicio">
            </div>
            <article id="botones">
                <table class="tabla_botones">
                    <tbody>
                        <tr>
                            <td class='botones_inicio'> 
                                <i class="fas fa-graduation-cap"></i>
                                <a onclick="redireccion('pregrado')" href="#">PREGRADO</a>
                            </td>
                            <td class='botones_inicio'>
                                <i class="fas fa-user-tie"></i>
                                <a onclick="redireccion('posgrado')" href="#">POSGRADO</a>
                            </td>
                            <td class='botones_inicio'>
                                <i class="fas fa-globe-americas"></i>
                                <a onclick="redireccion('ingles')" href="#">INGLÉS</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </article>
            <section id="cuadrilla">
                <article class="parte_cuadrilla" id="noticias">
                    <h3 class="titulo_cuadrilla letra_15em">Noticias</h3>  
                    <p class="cuerpo_cuadrilla letra_13em">Ultimas noticias
                    <ul>
                        <li>El CEV aumento su rendimiento un 50% en el último año...</li>
                        <li>Se abren convocatorias para e comite de egresados de la UDCA...</li>
                        <li>Nuevos equipos han llegado a la UDCA para mejorar sus intalaciones...</li>
                    </ul>  
                    </p>
                </article>
                <article class="parte_cuadrilla" id="eventos">
                    <h3 class="titulo_cuadrilla letra_15em">Eventos</h3>  
                    <p class="cuerpo_cuadrilla letra_13em">Programación de eventos
                    <ul>
                        <li>Celebración amor y amistad - Septiembre 22</li>
                        <li>Celebración Halloween - Octubre 31</li>
                        <li>Celebración Día de todos los santos - Noviembre 01</li>
                    </ul>
                    </p>  
                </article>
                <article class="parte_cuadrilla" id="redes_sociales">
                    <h3 class="titulo_cuadrilla letra_15em">Redes sociales</h3>  
                    <p class="cuerpo_cuadrilla letra_13em cuerpo_cuadrilla_redes_sociales">Siguenos en nuestra redes sociales
                    <br><a class="link_redes_sociales" href="https://facebook.com/CEV_udca"><img class="redes_sociales_imagen" src="<?php echo base_url(); ?>assets/images/facebook.png" alt="logo facebook"> Página Oficial de Facebook del CEV de la UDCA</a>
                    <br><a class="link_redes_sociales" href="https://twitter.com/CEV_udca"><img class="redes_sociales_imagen" src="<?php echo base_url(); ?>assets/images/twitter.png" alt="logo twitter"> Página Oficial de Twitter del CEV de la UDCA</a>
                    <br><a class="link_redes_sociales" href="https://linkedin.com/CEV_udca"><img class="redes_sociales_imagen" src="<?php echo base_url(); ?>assets/images/linkedin.png" alt="logo linkedin"> Página Oficial de Linkedin del CEV de la UDCA</a>
                    </p> 
                </article>
                <article class="parte_cuadrilla" id="otros">
                    <h3 class="titulo_cuadrilla letra_15em">Otros</h3>  
                    <p class="cuerpo_cuadrilla letra_13em">Otros temas de interes
                        <ul>
                        <li>¿Cómo ser un mejor estudiante en metodologia virtual?</li>
                        <li>¿Cómo redactar una hoja de vida?</li>
                        <li>¿Cómo obtener une beca?</li>
                        <li>¿Cómo pertenecer a un equipo de la Universidad?</li>
                        <li>¿Cómo hacer uso del aula virtual?</li>
                        <li>Dudas frecuentes</li>
                    </ul>
                    </p>  
                </article>
                <video id="video_inicio" autoplay controls>
                    <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                </video>
            </section>
        </section>
    </div>
	<div style="text-align: center; margin: 2em;">
		<h2>Cantidad de Visitas: <?php echo $cantidad_visitas; ?> </h2>
	</div>
    <footer>
        <p>Contactanos</p>
        <p><small><b>Dirección:</b> Calle 222 No. 55-37, Bogotá</small></p>
        <p><small><b>Teléfonos:</b> 6684700 EXT 125</small></p>
        <p><small><b>Correo:</b> eduvirtual@udca.edu.co</small></p>
        <p id="copyright"><small>Centro de educación virtual de la UDCA 2018 | © Reservados todos los derechos</p>
    </footer>
</body>
</html>