<?php
	include_once '../conexion.inc.php';
    include_once 'listar-productos/Productos_Boundary.php';
	include_once 'registrar-productos/Producto_Boundary.php';
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- estilos css personalizados -->
		<link rel="stylesheet" type="text/css" href="../../css/registro-compra.css">
		<link rel="stylesheet" type="text/css" href="../../css/menu.css">

		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<title>V&V S.A. - Listado de productos</title>
	</head>
	<body>
		<!-- inclusión del menú en la cabacera de la página -->
		<?php include '../../menu-head.php' ?>

		<div class="div-content">
			<div class="div-add-product">
				<button class="button-modal" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg>
					<p class="p-add-product font-18px">Agregar nuevo producto</p>
				</button>
			</div>

			<table>
				<thead>
					<tr class="font-size-head">
						<th scope="col" class="th-id">ID</th>
						<th scope="col" class="th-descripcion">Descripción</th>
						<th scope="col" class="th-modelo">Modelo</th>
						<th scope="col" class="th-marca">Marca</th>
						<th scope="col" class="th-lote">Lote</th>
						<th scope="col" class="th-procedencia">Procedencia</th>
						<th scope="col" class="th-stock">Stock</th>
						<th scope="col" class="th-precio-compra">Precio compra</th>
						<th scope="col" class="th-precio-venta">Precio venta</th>
						<th scope="col" class="th-button"></th>
					</tr>
				</thead>
				<tbody>
					<?php
					    $productos_boundary = new Productos_Boundary();
                        $productos = $productos_boundary->listar_productos();
						/*foreach ($usuarios as $usuario) {
					?>
							<tr class="font-size-body">
								<td class="td-id"><?php echo $usuario[0] ?></td>
								<td class="td-documento"><?php echo $usuario[1] ?></td>
								<td class="td-nombres"><?php echo $usuario[2] ?></td>
								<td class="td-apellidos"><?php echo $usuario[3] ?></td>
								<td class="td-celular"><?php echo $usuario[4] ?></td>
								<td class="td-email"><?php echo $usuario[5] ?></td>
								<td class="td-direccion"><?php echo $usuario[6] ?></td>
								<td class="td-estado"><?php echo $usuario[7] ?></td>
								<td class="td-perfil"><?php echo $usuario[8] ?></td>
								<td class="td-button">
									
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
										<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
										<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
									</svg>

								</td>
								<td class="td-button">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
									</svg>
								</td>
							</tr>
					<?php } */?>
				</tbody>
			</table>
			
			<!-- modal de registro de usuarios -->
			<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content div-registro-usuario">
						<!-- formulario de registro de perfiles -->
						<form method="POST" name="form-usuario">
							<label class="font-24px label-title">Registro de usuario</label>

							<p class="font-14px p-campo-obligatorio">* Campo obligatorio</p>

							<!-- input documento -->
							<label class="font-18px label-document">Documento<span id="spanDocumento" class=""> * </span></label>
							<input 	type="text" name="documento" id="documento" class="form-control width-100" onfocusout="spanDocumentoOut()"onfocusin="spanDocumentoIn()" oninput="validarCampos()">

							<!-- input nombres -->
							<label class="font-18px label">Nombres<span id="spanNombres" class=""> * </span></label>	
							<input type="text" name="nombres" id="nombres" class="form-control width-100" onfocusout="spanNombresOut()" onfocusin="spanNombresIn()" oninput="validarCampos()">

							<!-- input apellidos -->
							<label class="font-18px label">Apellidos<span id="spanApellidos" class=""> * </span></label>
							<input type="text" name="apellidos" id="apellidos" class="form-control width-100" onfocusout="spanApellidosOut()" onfocusin="spanApellidosIn()" oninput="validarCampos()">

							<!-- input celular -->
							<label class="font-18px label">Celular</label>
							<input type="text" name="celular" id="celular" class="form-control width-100">

							<!-- input email -->
							<label class="font-18px label">Correo electrónico<span id="spanEmail" class=""> * </span></label><p class="font-14px p-correo">Aquí se enviará la contraseña del usuario</p>
							<input type="text" name="email" id="email" class="form-control width-100 input-text-email" onfocusout="spanEmailOut()" onfocusin="spanEmailIn()" oninput="validarCampos()">

							<!-- input dirección -->
							<label class="font-18px label">Dirección</label>
							<input type="text" name="direccion" id="direccion" class="form-control width-100">

							<!-- Select perfil -->
							<label class="font-18px label">Perfil<span id="spanPerfil" class=""> * </span></label>
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
								<select name="perfil" id="perfil" class="form-control input-group input-perfil">
									<option></option>
									<?php foreach ($perfiles as $perfil) {?><option value="<?php echo $perfil[0]?>"><?php echo $perfil[1]?></option><?php }?>
								</select>
								<div>
									<button type="button" id="button-funciones" class="btn form-control" onclick="">Funciones</button>
								</div>
							</div>

							<!-- inputs submit -->
							<button type="button" id="button-cancelar" class="btn" onclick="" <?php /*echo 'data-bs-dismiss="modal"'*/ ?>>Cancelar</button>
							<input type="submit" id="input-registrar" class="btn" name="registrar" value="Registrar">
							
						</form>
						<!-- conexión a la base de datos y consulta a la misma para comprobar las credenciales -->
						<?php
							if (isset($_POST['registrar'])) { $documento = $_POST['documento'];
								if ($documento != '' && is_numeric($documento)) { $nombres = trim($_POST['nombres']);
									if ($nombres != '' && is_string($nombres)) { $apellidos = trim($_POST['apellidos']);
										if ($apellidos != '' && is_string($apellidos)) { $email = str_replace(' ', '', trim($_POST['email']));
											if ($email != '' && is_string($email)) { $perfil = $_POST['perfil'];
												if ($perfil != '' && is_numeric($perfil)) {
													$celular = $_POST['celular'];
													$direccion = $_POST['direccion'];

													Conexion::abrir_conexion();
													$conexion = Conexion::obtener_conexion();			
													$usuario = new Usuario_Boundary($conexion, $documento, $nombres, $apellidos, $celular, $email, $direccion, $perfil);
													$var = $usuario->registrar();

													if ($var) {
														echo 'funciona';
													} else {
														echo	'<script type="text/javascript">
																	alert("No se puede registrar.");
																</script>';
													}

													Conexion::cerrar_conexion();
												}
											}
										}
									}
								}
							}

							/*if (isset($_POST['cancelar'])) {
								?>
									<script>
										var opcion = confirm("¿Está seguro de cancelar?\nSe perderán los datos ya ingresados.");
									</script>
								<?php
							}*/
						?>
					</div>
				</div>
			</div>
		</div>

		<!-- interacciones con javascript -->
		<script src="../../js/interaction.js"></script>

		<!-- Javascript de boostrap -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	</body>
</html>