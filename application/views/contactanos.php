<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CONTACTO | Centro de educación virtual de la UDCA</title>
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
            <article class="seccion_contactanos">
                <div>
                    <h3 class="letra_15em">¿Deseas contactarnos?</h3>
                    <p class="alinear_justificar letra_13em">Si deseas ponerte en contacto con nosotros, completa el siguiente formulario <small><b>(*) Campos obligatorios</b></small></p>
                    <form action="inexsistente.php" autocomplete="on">
                        <table>
                            <tr>
                                <td class="alinear_centro letra_15em" colspan="2">Formulario de contacto</td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="letra_13em" for="id_nombre">Escribe tu nombre: *</label>    
                                </td>
                                <td>    
                                    <input id="id_nombre" name="nombre" type="text" placeholder="Escribe tu nombre" autofocus required /><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="letra_13em" for="id_correo">Escribe tu correo: *</label>    
                                </td>
                                <td>
                                    <input id="id_correo" name="correo" type="email" placeholder="ejemplo@dominio.com" required /><br>    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="letra_13em" for="id_celular">Escribe tu celular: *</label>    
                                </td>
                                <td>
                                    <input id="id_celular" name="celular" type="tel" placeholder="312 345 1267" required /><br>    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="letra_13em" for="id_motivo">Motivo del mensaje: *</label>    
                                </td>
                                <td>
                                    <select id="id_motivo"><option value="0">Selecciona un motivo para el mensaje</option><option value="informacion_programas">Información acerca de los programas</option><option value="dudas_plataforma">Dudas con el uso de la plataforma</option><option value="notificar_error">Notificar un error en la plataforma</option></select>    
                                </td>
                            </tr>
                            <tr>
                                <td>    
                                    <label class="letra_13em" for="id_mensaje">A continuación escribe con más detalle el motivo *</label>
                                </td>
                                <td>    
                                    <textarea id="id_mensaje" name="comentario" cols="30" rows="10" required>Escribe tu motivo más detallado</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="alinear_centro" colspan="2">
                                    <input class="letra_15em" type="submit" value="Enviar formulario">
                                </td>
                            </tr>
                        </table>
                    </form> 
                </div>
                <figure>
                    <img src="<?php echo base_url(); ?>assets/images/contactanos.jpg" alt="Imagen de contacto">
                    <figcaption>Imagen de contacto</figcaption>
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