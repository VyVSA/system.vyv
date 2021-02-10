<?php
	include_once '../conexion.inc.php';
	include_once 'crear-usuario/Usuario_Boundary.php';
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- estilos css personalizados -->
		<link rel="stylesheet" type="text/css" href="../../css/registro-usuario.css">

		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<title>V&V S.A. - Registro de usuario</title>
	</head>
	<body>
		<!-- inclusión del menú en la cabacera de la página -->
		<?php include '../../menu-head.php' ?>

		<div class="div-content">
			<div class="div-add-user">
				<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
					<path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					<path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
				</svg>
				<p class="p-add-user font-18px">Agregar nuevo usuario</p>
			</div>

			<table>
				<thead>
					<tr class="font-18px">
						<th scope="col" class="th-id">ID</th>
						<th scope="col" class="th-documento">Documento</th>
						<th scope="col" class="th-nombres">Nombres</th>
						<th scope="col" class="th-apellidos">Apellidos</th>
						<th scope="col" class="th-celular">Celular</th>
						<th scope="col" class="th-email">Email</th>
						<th scope="col" class="th-direccion">Dirección</th>
						<th scope="col" class="th-estado">Estado</th>
						<th scope="col" class="th-perfil">Perfil</th>
						<th scope="col" class="th-button"></th>
						<th scope="col" class="th-button"></th>
					</tr>
				</thead>
				<tbody>
					<?php
					?>
					<tr>
						<td></td>
					</tr>
					<?php
					?>
				</tbody>
			</table>

			<?php /*
			<div class="div-registro-usuario">
				<!-- formulario de registro de perfiles -->
				<form method="POST" name="form-usuario">
					<label class="font-24px label-title">Registro de usuario</label>

					<!-- input documento -->
					<label class="font-18px label-document">Documento</label>
					<input type="text" name="documento" class="form-control width-100">

					<!-- input nombres -->
					<label class="font-18px label">Nombres</label>
					<input type="text" name="nombres" class="form-control width-100">

					<!-- input apellidos -->
					<label class="font-18px label">Apellidos</label>
					<input type="text" name="apellidos" class="form-control width-100">

					<!-- input celular -->
					<label class="font-18px label">Celular</label>
					<input type="text" name="celular" class="form-control width-100">

					<!-- input email -->
					<label class="font-18px label">Email</label>
					<input type="text" name="email" class="form-control width-100">

					<!-- input dirección -->
					<label class="font-18px label">Dirección</label>
					<input type="text" name="direccion" class="form-control width-100">

					<!-- Select perfil -->
					<label class="font-18px label">perfil</label>
					<div class="input-group divv">
						<?php
							$querySql = "SELECT * FROM perfil;";
							Conexion::abrir_conexion();
							$conexion = Conexion::obtener_conexion();
							$sentencia = $conexion->prepare($querySql);
							$sentencia->execute();
							$perfiles = $sentencia->fetchAll();
							Conexion::cerrar_conexion();
						?>
						<select name="perfil" id="input-perfil" class="form-control input-group">
							<option></option>
							<?php foreach ($perfiles as $perfil) {?><option value="<?php echo $perfil[0]?>"><?php echo $perfil[1]?></option><?php }?>
						</select>
						<div>
							<button type="button" id="button-funciones" class="btn form-control" onclick="">Funciones</button>
						</div>
					</div>

					<!-- inputs submit -->
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
						$usuario = new Usuario_Boundary($conexion, $documento, $nombres, $apellidos, $celular, $email, $direccion, $perfil);
						$usuario->registrar();
						Conexion::cerrar_conexion();
					}
				?>
			</div>
			*/?>
		</div>

		<!-- interacciones con javascript -->
		<script language="JavaScript">
			document.getElementById("item-usuarios").className = "active";
			document.getElementById("a-perfiles").href = "../perfiles/registro-perfiles.php";
		</script>
		<!-- Javascript de boostrap -->
		<src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></src=>
	</body>
</html>