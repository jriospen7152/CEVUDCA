<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<title>Inicio de Sesión</title>

			<style type="text/css">
	
			</style>
			<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/inicio_sesion.js"></script>
		</head>
		<body>

		<div id="container">
			<br/>
			<br/>
			<br/>
			<br/>
			<h2 style="width: 100%; text-align: center;">Formulario de Inicio de Sesión</h2>
			<br/>
			<br/>
			<div style="width: 50%; margin: 0 auto; border: 1px solid #999999; padding: 1em 1em 1em 1em;" class="form">
				<div class="form-group">
					<label>Nombre de usuario</label>
					<input type="text" id="usuario" class="form-control" placeholder="Nombre de usuario">
				</div>
				<div class="form-group">
					<label>Contraseña</label>
					<input type="password" id="contrasena" class="form-control" placeholder="Contraseña">
					<input type="hidden" id="ruta" value="<?php echo site_url('autenticacion/iniciar_sesion') ?>">
					<input type="hidden" id="ruta_error" value="<?php echo site_url('cev/index') ?>">
				</div>
				<button class="btn btn-success">Iniciar Sesión</button> <a href="<?php echo site_url('autenticacion/registro') ?>" class="btn btn-info">Registrar</a>
			</div>
		</div>
	</body>
</html>