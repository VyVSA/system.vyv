<?php
	include_once '../conexion.inc.php';
	include_once 'crear-usuario/Usuario_Boundary.php';
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="../../css/registro-usuario.css">

		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

		<title>V&V S.A. - Registro de usuario</title>
	</head>
	<body>
		<!-- Inclusión del menú en la cabacera de la página -->
		<?php include '../../menu-head.php' ?>

		<div class="div-content">
			<div class="div-registro-usuario">

				<!-- formulario de registro de perfiles -->
				<form method="POST" name="form-usuario">
					<label class="font-24px label-title">Registro de usuario</label>

					<label class="font-18px label-document">Documento</label>
					<input type="text" name="documento" class="form-control width-100">

					<label class="font-18px label">Nombres</label>
					<input type="text" name="nombres" class="form-control width-100">

					<label class="font-18px label">Apellidos</label>
					<input type="text" name="apellidos" class="form-control width-100">

					<label class="font-18px label">Celular</label>
					<input type="text" name="celular" class="form-control width-100">

					<label class="font-18px label">Email</label>
					<input type="text" name="email" class="form-control width-100">

					<label class="font-18px label">Dirección</label>
					<input type="text" name="direccion" class="form-control width-100">

					<label class="font-18px label">perfil</label>
					<div class="input-group divv">
						<input type="text" name="perfil" id="input-perfil" class="form-control">
						<div class="input-group-prepend">
							<button type="button" id="button-funciones" class="btn form-control" onclick="">Funciones</button>
						</div>
					</div>
					<!-- input submit iniciar sesión -->
					<input type="submit" name="cancelar" id="input-cancelar" class="btn" value="Cancelar">

					<input type="submit" name="registrar" id="input-registrar" class="btn" value="Registrar">

				</form>

				<!-- conexión a la base de datos y consulta a la misma para comprobar las credenciales -->
				<?php

					if (isset($_POST['registrar'])) {

						$documento = $_POST['documento'];
						$nombres = $_POST['nombres'];
						$apellidos = $_POST['apellidos'];
						$celular = $_POST['celular'];
						$email = $_POST['email'];
						$direccion = $_POST['direccion'];
						$perfil = $_POST['perfil'];

						Conexion::abrir_conexion();
						$conexion = Conexion::obtener_conexion();

						$usuario = new Usuario_Boundary($documento, $nombres, $apellidos, $celular, $email, $direccion, $perfil);
						$usuario->registrar();
						Conexion::cerrar_conexion();
					}

					/*array_push(que-array, valor);*/

					
				?>

			</div>
		</div>

		<script language="JavaScript">
			document.getElementById("item-usuarios").className = "active";
		</script>

		<!-- Javascript de boostrap -->
		<src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></src=>
	</body>
</html>