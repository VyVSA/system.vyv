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
		<link rel="stylesheet" type="text/css" href="../../css/producto.css">
		<link rel="stylesheet" type="text/css" href="../../css/menu-head.css">
        <!-- estilos de texto -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap">
		<!-- estilos de bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<title>V&V S.A. - Registro de productos</title>
	</head>
	<body>
		<!-- inclusión del menú en la cabacera de la página -->
		<?php include '../../menu-head.php' ?>
		<div class="div-content">
			<div class="div-button-volver">
				<button class="button-volver" title="volver">
					<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
					</svg>
				</button>
			</div>
			<div class="div-registro-productos">
				<!-- formulario de registro de perfiles -->
				<form method="POST" name="form-producto">
					<div>
						<label class="font-24px label-title">Registro de producto</label>
						<p class="font-14px p-campo-obligatorio">* Campo obligatorio</p>
					</div>
					<div class="input-group">
						<div class="column-1">
							<!-- input descripción - campo obligatorio-->
							<label class="font-18px label-descripcion">Descripción<span id="spanDescripcion" class=""> * </span></label>
							<input 	type="text" name="documento" id="input-descripcion" class="form-control width-100" onfocusout="spanDescripcionOut()"onfocusin="spanDescripcionIn()">

							<!-- input marcas - campo obligatorio-->
							<label class="font-18px label">Marca<span id="spanMarca" class="" onfocusout="spanMarcaOut()"onfocusin="spanMarcaIn()"> * </span></label>
							<?php
								$querySql = "SELECT * FROM marca;";
								Conexion::abrir_conexion();
								$conexion = Conexion::obtener_conexion();
								$sentencia = $conexion->prepare($querySql);
								$sentencia->execute();
								$marcas = $sentencia->fetchAll();
								Conexion::cerrar_conexion();
							?>
							<div class="input-group divv">
								<select name="marca" id="marca" class="form-control input-group input-select">
									<option value="0"></option>
									<?php foreach ($marcas as $marca) {?><option value="<?php echo $marca[0]?>"><?php echo $marca[1]?></option><?php }?>
								</select>
								<!-- button abrir segundo modal registro de marca -->
								<div><button type="button" id="button-marca" class="btn form-control" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Agregar</button></div>
							</div>

							<!-- input modelo - campo obligatorio-->
							<label class="font-18px label">Modelo<span id="spanModelo" class=""> * </span></label>
							<input type="text" name="modelo" id="modelo" class="form-control width-100" onfocusout="spanModeloOut()" onfocusin="spanModeloIn()" oninput="validarCampos()">

							<!-- input lote -->
							<label class="font-18px label">Lote</label>
							<input type="text" name="lote" id="lote" class="form-control width-100">
						</div>
						<div class="column-2 ">
							<!-- input procedencia - campo obligatorio-->
							<label class="font-18px label-procedencia">Procedencia<span id="spanProcedencia" class=""> * </span></label>
							<?php
								$querySql = "SELECT * FROM procedencia;";
								Conexion::abrir_conexion();
								$conexion = Conexion::obtener_conexion();
								$sentencia = $conexion->prepare($querySql);
								$sentencia->execute();
								$procedencias = $sentencia->fetchAll();
								Conexion::cerrar_conexion();
							?>
							<div class="input-group divv">
								<select name="procedencia" id="procedencia" class="form-control input-group input-select">
									<option></option>
									<?php foreach ($procedencias as $procedencia) {?><option value="<?php echo $procedencia[0]?>"><?php echo $procedencia[1]?></option><?php }?>
								</select>
								<div>
									<button type="button" id="button-procedencia" class="btn form-control" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Agregar</button>
								</div>
							</div>

							<!-- input dirección -->
							<label class="font-18px label">Fecha de vencimiento</label>
							<input type="date" name="vencimiento" id="vencimiento" class="form-control width-100">

							<!-- Select perfil -->
							<label class="font-18px label">Observaciones</label>
							<textarea rows="4" name="observaciones" class="form-control"></textarea>
						</div>
						</div>
							<!-- inputs submit -->
							<div class="input-group">
								<div class="align-div"></div>
								<div class="align-div column-2-button">
									<button type="button" id="button-cancelar" class="btn" <?php echo 'data-bs-dismiss="modal"' ?>>Cancelar</button>
									<input type="submit" id="input-registrar" class="btn" name="registrar" value="Registrar">
								</div>
							</div>
						</div>
					</div>
				</form>
				<!-- conexión a la base de datos y consulta a la misma para comprobar las credenciales -->
				<?php if (isset($_POST['registrar'])) { $documento = $_POST['documento'];
					if ($documento != '' && is_numeric($documento)) { $marcas = trim($_POST['marcas']);
						if ($marcas != '' && is_string($marcas)) { $modelo = trim($_POST['modelo']);
							if ($modelo != '' && is_string($modelo)) { $procedencia = str_replace(' ', '', trim($_POST['procedencia']));
								if ($procedencia != '' && is_string($procedencia)) { $perfil = $_POST['perfil'];
									if ($perfil != '' && is_numeric($perfil)) {
										$lote = $_POST['lote'];
										$direccion = $_POST['direccion'];
										Conexion::abrir_conexion();
										$conexion = Conexion::obtener_conexion();			
										$usuario = new Usuario_Boundary($conexion, $documento, $marcas, $modelo, $lote, $procedencia, $direccion, $perfil);
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
				}?>
			</div>
		</div>
		<!-- interacciones con javascript -->
		<script src="../../js/interaction-productos.js"></script>
		<script>

		</script>
		<!-- Javascript de boostrap -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	</body>
</html>