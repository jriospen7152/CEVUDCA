<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RECURSOS | Centro de educación virtual de la UDCA</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
</head>
<body >
    <header>
            <img class="logo" src="<?php echo base_url(); ?>assets/images/CEV.png" />
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
                <img src="<?php echo base_url(); ?>assets/images/recursos.jpg" alt="imagen de recursos">
            </div>
            <section id="individual">
                <article>
                    <h3 class="letra_15em">¿Qué herramientas tecnologicas utiliza el CEV?</h3>
                    <p class="texto_proyectos">Para el desempeño de nuestras labores contamos con herramientas tecnologicas de punta, abogamos por el uso de Software libre ya que este nos da la posibilidad de adaptar dicahs soluciones a nuestras necesidades especificas, las herramientas que actualmente utilizamos son: </p>
                    <p class="texto_proyectos">
                        <ul class="lista_no_decorada letra_13em alinear_izquierda">
                            <li><b>Kahoot:</b> Es la plataforma utilizada para las evaluaciones, ya que nospermite la creación de cuestionarios de evaluación, si quieres conocer más de esta plataforma <a href="https://kahoot.it/"> da click aqui!</a></li>
                            <li><b>Mentí:</b> Es la plataforma utilizada para las evaluaciones, ya que nospermite la creación de cuestionarios de evaluación, si quieres conocer más de esta plataforma <a href="https://kahoot.it/"> da click aqui!</a></li>
                            <li><b>Google Drive:</b> Es la plataforma utilizada para la gestión de documentos y almacenamiento en la nube, hace parte de la suite de Google, si quieres conocer un poco más de ella <a href="https://www.google.es/drive/apps.html"> da click aqui!</a></li>
                            <li><b>Office 365:</b> Es la plataforma utilizada para la creación de documentos, si quieres conocer más de esta plataforma <a href="https://www.office.com/"> da click aqui!</a></li>
                            <li><b>Genially:</b> Es la plataforma utilizada la creación de presentaciones interactivas y llamativas, si quieres conocer más de esta plataforma <a href="https://www.genial.ly/es"> da click aqui!</a></li>
                            <li><b>Canvas:</b> Es la plataforma utilizada para la creación de diagramas interactivos, utilizados para la epxlicación de temas, si quieres conocer más de esta plataforma <a href="https://www.canva.com/"> da click aqui!</a></li>
                        </ul>
                    </p>
                </article>
            </section>
        </section>
    </div>
    <footer>
        <p>Contactanos</p>
        <p><small><b>Dirección:</b> Calle 222 No. 55-37, Bogotá</small></p>
        <p><small><b>Teléfonos:</b> 6684700 EXT 125</small></p>
        <p><small><b>Correo:</b>direccion</small></p>
        <p id="copyright"><small>Centro de educación virtual de la UDCA 2018 | © Reservados todos los derechos</p>
    </footer>
</body>
</html>