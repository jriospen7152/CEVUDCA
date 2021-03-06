<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SOBRE EL CEV | Centro de educación virtual de la UDCA</title>
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
                <img src="<?php echo base_url(); ?>assets/images/sobrecev.jpg" alt="imagen de inicio">
            </div>
            <section id="individual">
                <article class="seccion_sobrecev">
                    <div>
                        <h3 class="letra_15em">¿Quiénes somos?</h3>
                        <p class="alinear_justificar letra_13em">Somos una Dependencia adscrita a la Facultad de Ciencias Jurídicas de la Educación y Sociales, que tiene como función fomentar el uso de las Tecnologías del Aprendizaje y la Comunicación TAC y apoya los procesos de formación a nivel de pregrado y posgrado en la modalidad virtual. Propende por el desarrollo de esta modalidad liderando, organizando y ejecutando propuestas de formación formal y no formal en esta nueva modalidad educativa. </p>
                    </div>
                    <figure>
                        <img src="<?php echo base_url(); ?>assets/images/quienessobrecev.png" alt="Imagen de funciones del CEV">
                        <figcaption>¿Quiénes somos?</figcaption>
                    </figure>
                </article>

                <article class="seccion_sobrecev">
                    <figure>
                        <img src="<?php echo base_url(); ?>assets/images/misionsobrecev.jpg" alt="Imagen de mision del CEV">
                        <figcaption>Misión del CEV</figcaption>
                    </figure>
                    <div>
                        <h3 class="letra_15em">¿Cuál es nuestra misión?</h3>
                        <p class="alinear_justificar letra_13em">El Centro de Educación Virtual se consolidará dentro de la comunidad académica y administrativa de la Universidad de Ciencias Aplicadas y Ambientales por la coherencia y claridad en los procesos, por sus servicios con calidad, innovadores y de amplia cobertura; por fomentar la inclusión y la competitividad en el manejo de las TIC contribuyendo en la formación integral de nuestros estudiantes.</p>
                    </div>
                </article>

                <article class="seccion_sobrecev">
                    <div>
                        <h3 class="letra_15em">¿Cuál es nuestra visión?</h3>
                        <p class="alinear_justificar letra_13em">El Centro de Educación Virtual se consolidará dentro de la comunidad académica y administrativa de la Universidad de Ciencias Aplicadas y Ambientales por la coherencia y claridad en los procesos, por sus servicios con calidad, innovadores y de amplia cobertura; por fomentar la inclusión y la competitividad en el manejo de las TIC contribuyendo en la formación integral de nuestros estudiantes.</p>
                    </div>
                    <figure>
                        <img src="<?php echo base_url(); ?>assets/images/visionsobrecev.jpg" alt="Imagen de vision del CEV">
                        <figcaption>Visión del CEV</figcaption>
                    </figure>
                </article>
                <p id="texto_pregunta_sobrecsv" class="alinear_centro letra_15em">Felicidades, haz ganado!</p>
                <button id="pregunta_sobrecev" class="letra_11em" onclick="pregunta()">Contesta la siguiente pregunta y gana un premio, da click para comenzar!</button>
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