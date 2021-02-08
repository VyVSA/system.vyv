<?php
	include_once '../conexion.inc.php';
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
					<input type="text" name="perfil" class="form-control width-100">

					<!-- input submit iniciar sesión -->
					<input type="submit" name="cancelar" id="input-cancelar" class="btn" value="Cancelar">

					<input type="submit" name="registrar" id="input-registrar" class="btn" value="Registrar">

				</form>

				<!-- conexión a la base de datos y consulta a la misma para comprobar las credenciales -->
				<?php

					if (isset($_POST['registrar'])) {
						if (isset($_POST['nombre'])) {
							$nombre = $_POST['nombre'];
							$funciones = array();

							if (isset($_POST['visualizar-perfil'])) {array_push($funciones, $_POST['visualizar-perfil']);}
							if (isset($_POST['registrar-perfil'])) {array_push($funciones, $_POST['registrar-perfil']);}
							if (isset($_POST['mantener-perfil'])) {array_push($funciones, $_POST['mantener-perfil']);}
							if (isset($_POST['bajar-perfil'])) {array_push($funciones, $_POST['bajar-perfil']);}
							
							if (isset($_POST['visualizar-usuario'])) {array_push($funciones, $_POST['visualizar-usuario']);}
							if (isset($_POST['registrar-usuario'])) {array_push($funciones, $_POST['registrar-usuario']);}
							if (isset($_POST['mantener-usuario'])) {array_push($funciones, $_POST['mantener-usuario']);	}
							if (isset($_POST['bajar-usuario'])) {array_push($funciones, $_POST['bajar-usuario']);}
							
							if (isset($_POST['visualizar-producto'])) {array_push($funciones, $_POST['visualizar-producto']);}
							if (isset($_POST['registrar-producto'])) {array_push($funciones, $_POST['registrar-producto']);}
							if (isset($_POST['mantener-producto'])) {array_push($funciones, $_POST['mantener-producto']);}
							if (isset($_POST['bajar-producto'])) {array_push($funciones, $_POST['bajar-producto']);}
							
							if (isset($_POST['visualizar-compra'])) {array_push($funciones, $_POST['visualizar-compra']);}
							if (isset($_POST['registrar-compra'])) {array_push($funciones, $_POST['registrar-compra']);}
							if (isset($_POST['mantener-compra'])) {array_push($funciones, $_POST['mantener-compra']);}
							if (isset($_POST['bajar-compra'])) {array_push($funciones, $_POST['bajar-compra']);}
							
							if (isset($_POST['visualizar-pedido'])) {array_push($funciones, $_POST['visualizar-pedido']);}
							if (isset($_POST['registrar-pedido'])) {array_push($funciones, $_POST['registrar-pedido']);}
							if (isset($_POST['mantener-pedido'])) {array_push($funciones, $_POST['mantener-pedido']);}
							if (isset($_POST['bajar-pedido'])) {array_push($funciones, $_POST['bajar-pedido']);}

							Conexion::abrir_conexion();
							$conexion = Conexion::obtener_conexion();
							$perfil = new Perfil_Boundary($conexion, $nombre, $funciones);
							$perfil->registrar();

							

							Conexion::cerrar_conexion();
						}
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