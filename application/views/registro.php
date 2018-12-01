<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<title>Registro</title>

			<style type="text/css">
	
			</style>
			<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/registro.js"></script>
		</head>
		<body>

		<div id="container">
			<br/>
			<br/>
			<h2 style="width: 100%; text-align: center;">Formulario de registro</h2>
			<br/>
			<br/>
			<div style="width: 50%; margin: 0 auto; border: 1px solid #999999; padding: 1em 1em 1em 1em;" class="form">
				<div class="form-group">
					<label >Usuario</label>
					<input id="usuario" type="text" class="form-control" placeholder="Usuario">
				</div>
				<div class="form-group">
					<label >Contraseña</label>
					<input id="contrasena" type="password" class="form-control" placeholder="Contraseña">
				</div>
				<div class="form-group">
					<label >Nombre</label>
					<input id="nombre" type="text" class="form-control" placeholder="Nombre">
				</div>
				<div class="form-group">
					<label >Apellido</label>
					<input id="apellido" type="text" class="form-control" placeholder="Apellido">
				</div>
				<div class="form-group">
					<label >Edad</label>
					<input id="edad" type="text" class="form-control" placeholder="Edad">
				</div>
				<div class="form-group">
					<label >Correo Electronico</label>
					<input id="correo_electronico" type="email" class="form-control" placeholder="Correo Electronico">
					<input id="ruta" type="hidden" value="<?php echo site_url('autenticacion/registrar') ?>">
					<input id="ruta_login" type="hidden" value="<?php echo site_url('autenticacion/login') ?>">
				</div>
				<button class="btn btn-success">Registrar</button>
			</div>

			<br/>
			<br/>
			<br/>
		</div>
	</body>
</html>