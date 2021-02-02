<?php
	include_once 'php/class.usuario.php';
	include_once 'php/class.usuario.control.php';
	include_once 'php/conexion.inc.php';
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="css/registro-perfiles.css">

		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

		<title>V&V S.A. - Registro de perfiles</title>
	</head>
	<body>
		<!-- Inclusión del menú en la cabacera de la página -->
		<?php include 'menu-head.php' ?>

		<div class="div-content">
			<div class="div-registro-perfil">

				<label class="font-24px label-title">Registro de Perfil</label>

				<label class="font-18px label-name">Nombre</label>
				<input type="text" name="nombre" id="input-nombre" class="form-control">
				
				<!-- logo de la empresa -->
				<div class="div-logo">
					<img class="img-logo" src="image/vyv_logo_3.png">
				</div>

				<!-- formulario de inicio de sesión -->
				<form method="POST">

					<!-- input documento -->
					<label class="form-label">Documento</label>
					<input type="text" name="documento" id="input-documento" class="form-control" aria-describedby="passwordHelpBlock" onkeyup="puntitos(this,this.value.charAt(this.value.length-1))">

					<!-- input contraseña -->
					<label class="form-label">Contraseña</label>
					<input type="password" name="contrasenha" id="input-contrasenha" class="form-control" aria-describedby="passwordHelpBlock">

					<!-- input submit iniciar sesión -->
					<input type="submit" name="sesion" id="input-sesion" class="btn" value="Iniciar sesión">

				</form>

				<!-- indicaciones para recuperar la contraseña -->
				<p id="recuperar">¿Has olvidado la contraseña?</p>

				<!-- conexión a la base de datos y consulta a la misma para comprobar las credenciales -->
				<?php
					Conexion :: abrir_conexion();
				?>

			</div>
		</div>

		<!-- Javascript de boostrap -->
 		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	</body>
</html>