<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PROYECTOS | Centro de educación virtual de la UDCA</title>
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
                <img src="<?php echo base_url(); ?>assets/images/proyectos.jpg" alt="imagen de proyectos">
            </div>
            <section id="individual">
                <article>
                    <h3 class="letra_15em">¿Cuáles son nuestros proyectos más importantes?</h3>
                    <p class="texto_proyectos">La inherente necesidad de innovación de nuestra sociedad nos obliga a fomentar la investigación como medio para alcanzarla, es asi como en la UDCA nos preocupamos por fomentar y crear los ambientes educativos necesarios para que dichas actividades puedan ser desemepeñadas en total comodidad por parte de los estudiantes</p>
                    <p class="texto_proyectos">Gracias al compromiso tanto de estudiantes como del profesorado se ha logrado crear enlaces entre distintas facultades de la universidad y sus centros de investigación, est con el fin de abordar un problema de investigación desde distintas disciplinas, para que el mismo se pueda ver enriquecido por los puntos de vista. en este orden de ideas a continuación nombramos algunos de nuestros proyectos más importantes.</p>
                </article>
                <article class="cuadrilla_proyectos">
                    <h3 class="titulo_proyecto">Carne de conejo para el consumo humano</h3>
                    <figure class="figura_proyecto">
                        <img class="imagen_proyecto" src="<?php echo base_url(); ?>assets/images/proyecto1.jpeg" alt="proyecto consumo carne conejo">
                        <figcaption>Imagen de consumo de carne de conejo</figcaption>
                    </figure>
                    <p class="cuerpo_proyecto">Se pudo concluir que la transformación de la carne de conejo en jamón puede ser una estrategia viable para masificar el consumo de este tipo de proteína animal</p>
                    <button onclick="votar('carne_conejo')" class="botones_voto letra_13em">Apoya este proyecto 0 votos</button>
                </article>
                <article class="cuadrilla_proyectos">
                    <h3 class="titulo_proyecto">Gestión del Agua Euroclima+</h3>
                    <figure class="figura_proyecto">
                        <img class="imagen_proyecto" src="<?php echo base_url(); ?>assets/images/proyecto2.jpg" alt="gestion del Agua">
                        <figcaption>Imagen de gestión del agua</figcaption>
                    </figure>
                    <p class="cuerpo_proyecto">La Unión Europea, dentro de su programa de cooperación regional EUROCLIMA+, convoca a autoridades nacionales y locales responsables de la política y regulación del sector del agua y de los servicios de agua potable y saneamiento a presentar propuestas</p>
                    <button onclick="votar('cuidado_agua')" class="botones_voto letra_13em">Apoya este proyecto 0 votos</button>
                </article>
                <article class="cuadrilla_proyectos">
                    <h3 class="titulo_proyecto">Lucha Contra la Resistencia Antimicrobiana</h3>
                    <figure class="figura_proyecto">
                        <img class="imagen_proyecto" src="<?php echo base_url(); ?>assets/images/proyecto3.jpeg" alt="lucha contra la resistencia antimicrobiana">
                        <figcaption>Imagen de lucha Contra la Resistencia Antimicrobiana</figcaption>
                    </figure>
                    <p class="cuerpo_proyecto">Soluciones veterinarias para reducir la resistencia a los antimicrobianos (AMR) con un enfoque en animales de aves de corral, cerdos o acuicultura. Al menos una de las instituciones administradoras debe estar basada en un país de ingresos bajos o medios</p>
                    <button onclick="votar('lucha_bacteriana')" class="botones_voto letra_13em">Apoya este proyecto 0 votos</button>
                </article>
            </section>
            <section id="cuadrilla">
                <article class="parte_cuadrilla" id="pregrado">
                    <h3 class="titulo_cuadrilla">Programas de pregrado</h3>  
                    <p class="cuerpo_cuadrilla">A continuación podras ver la lista de enlaces de pregrados disponibles en modalidad virtual en la UDCA, da click sobre el que más te interese para obtener más información  
                    <ul id="lista_cursos_pregrado">
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Informática Virtual</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Inglés Virtual</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Catedra Institucional</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">PlanesTIC</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Summary</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Medicina</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Enfermeria</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Ciencias del Deporte</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Premedico</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Tec. en Entrenamiento Deportivo</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Economia</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Negocios Internacionales</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Administracion de Empresas</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Medicina Veterinaria</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Zootecnia</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Medicina Veterinaria y Zootecnia</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Medicina Veterinaria y Zootecnia Cartagena</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Quimica</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Quimica Farmaceutica</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Departamento de Ciencias Exactas y Naturales</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Ciencias Ambientales</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Ingenieria Agronomica</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Ingeniería Comercial</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Ingeniería Geográfica y Ambiental</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Derecho</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Licenciatura en Ciencias Naturales y Educación Ambiental</a></li>
                    </ul>  
                    </p>
                </article>
                <article class="parte_cuadrilla" id="posgrado">
                    <h3 class="titulo_cuadrilla">Programas de posgrado</h3>  
                    <p class="cuerpo_cuadrilla">A continuación podras ver la lista de enlaces de posgrados disponibles en modalidad virtual en la UDCA, da click sobre el que más te interese para obtener más información  
                    <ul id="lista_cursos_posgrado">
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Esp. en Lab. Clínico Veterinario</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Esp. en Sanidad Animal</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Esp. en Producción Animal</a></li>
                        <li><a href="https://virtual.udca.edu.co/course/index.php" target="_BLANK">Esp. en Nutrición Animal Aplicada </a></li>
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