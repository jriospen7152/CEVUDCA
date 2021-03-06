<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SERVICIOS | Centro de educación virtual de la UDCA</title>
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
                    <a class="botones_nav" href="<?php echo site_url('cev/index') ?>">Inicio</a>
                </li>
                <li>
                    <a class="botones_nav" href="<?php echo site_url('cev/proyectos') ?>">Proyectos</a>
                </li>
                <li>
                    <a class="botones_nav" href="<?php echo site_url('cev/recursos') ?>">Recursos</a>
                </li>
                <li>
                    <a class="botones_nav" href="<?php echo site_url('cev/sobrecev') ?>">Sobre el CEV</a>
                </li>
                <li>
                    <a class="botones_nav" href="<?php echo site_url('cev/servicio') ?>">Servicio</a>
                </li>
                <li>
                    <a class="botones_nav" href="<?php echo site_url('cev/contactanos') ?>">Contáctanos</a>
                </li>
                <?php
                    if($this->session->userdata('usuario') != null){
                        $usuario = $this->session->userdata('usuario');
                        echo '<li><a class="botones_nav" href="#" disabled="disabled">Usuario: ' . $usuario["usuario"] . '</a></li>';
                        echo "<li><a class='botones_nav' href='".site_url('autenticacion/cerrar_sesion')."'>Cerrar Sesión</a></li>";
                    }else{
                        echo "<li><a class='botones_nav' href='".site_url('autenticacion/login')."'>Iniciar Sesión</a></li>";
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
            <article class="seccion_sobrecev">
                <div>
                    <h3 class="letra_15em">¿Cuáles son nuestros servicios?</h3>
                    <p class="alinear_justificar letra_13em">Entre nuestros servicios se encuentran</p>
                    <ul class="alinear_izquierda">
                        <li>Fomentar el uso de las Tecnologías del Aprendizaje y la Comunicación TAC</li>
                        <li>Apoyar los procesos de formación a nivel de pregrado y posgrado en la modalidad virtual.</li>
                        <li>Liderar, organizar y ejecutar propuestas de formación formal y no formal en la modalidad virtual educativa.</li>
                        <li>Administra las asignaturas de inglés e Informática en la modalidad virtual, dos asignaturas básicas del área institucional</li>
                        <li>Apoya el ofrecimiento en las Especializaciones a Distancia en la modalidad virtual. </li>
                        <li>Crea, diseña, orienta y apoya la construcción de objetos y cursos virtuales de aprendizaje.</li>
                        <li>Capacita a los docentes y el personal administrativo en el manejo de la plataforma Moodle, en la construcción de objetos y cursos virtuales de aprendizaje</li>
                        <li>Contribuye en la formación y fortalecimiento de las habilidades de los tutores.</li>
                        <li>Ofrece curso de Idiomas al personal académico y administrativo que desee incursionar o perfeccionar un idioma extranjero.</li>
                    </ul>
                </div>
                <figure>
                    <img src="<?php echo base_url(); ?>assets/images/funcionessobrecev.jpeg" alt="Imagen de las funciones del CEV">
                    <figcaption>Servicios del CEV</figcaption>
                </figure>
            </article>
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