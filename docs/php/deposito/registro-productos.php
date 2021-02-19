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
				<button class="button-volver" title="Volver" onclick="listaProductos()">
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
							<input 	type="text" name="descripcion" id="input-descripcion" class="form-control width-100" onfocusout="spanDescripcionOut()" onfocusin="spanDescripcionIn()" oninput="validarCampo()">

							<!-- select marcas - campo obligatorio-->
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
								<select name="marca" id="marca" class="form-control input-group input-select" onfocusout="spanMarcaOut()" onfocusin="spanMarcaIn()" oninput="validarCampo()">
									<option></option>
									<?php foreach ($marcas as $marca) {?><option value="<?php echo $marca[0]?>"><?php echo $marca[1]?></option><?php }?>
								</select>
								<!-- button abrir segundo modal registro de marca -->
								<div><button type="button" id="button-marca" class="btn form-control" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Agregar</button></div>
							</div>

							<!-- input modelo - campo obligatorio-->
							<label class="font-18px label">Modelo<span id="spanModelo" class=""> * </span></label>
							<input type="text" name="modelo" id="modelo" class="form-control width-100" onfocusout="spanModeloOut()" onfocusin="spanModeloIn()" oninput="validarCampo()">

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
								<select name="procedencia" id="procedencia" class="form-control input-group input-select" onfocusout="spanProcedenciaOut()" onfocusin="spanProcedenciaIn()" oninput="validarCampo()">
									<option></option>
									<?php foreach ($procedencias as $procedencia) {?><option value="<?php echo $procedencia[0]?>"><?php echo $procedencia[1]?></option><?php }?>
								</select>
								<div>
									<button type="button" id="button-procedencia" class="btn form-control" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Agregar</button>
								</div>
							</div>

							<!-- input vencimiento -->
							<label class="font-18px label">Fecha de vencimiento</label>
							<input type="date" name="vencimiento" id="vencimiento" class="form-control width-100">

							<!-- input observaciones -->
							<label class="font-18px label">Observaciones</label>
							<textarea rows="4" name="observaciones" class="form-control"></textarea>
						</div>
						</div>
							<!-- inputs submit -->
							<div class="input-group">
								<div class="align-div"></div>
								<div class="align-div column-2-button">
									<button type="button" id="button-cancelar" class="btn">Cancelar</button>
									<input type="submit" id="input-registrar" class="btn" name="registrar" value="Registrar">
								</div>
							</div>
						</div>
					</div>
				</form>

				<!-- conexión a la base de datos y consulta a la misma para comprobar las credenciales -->
				<?php if (isset($_POST['registrar'])) {
					$descripcion = $_POST['descripcion'];
					if ($descripcion != '') {
						$marca = $_POST['marca'];
						if ($marca != '') {
							$modelo = trim($_POST['modelo']);
							if ($modelo != '') {
								$procedencia = $_POST['procedencia'];
								if ($procedencia != '') {
									$lote = $_POST['lote'];
									$vencimiento = $_POST['vencimiento'];
									$observaciones = $_POST['observaciones'];
									Conexion::abrir_conexion();
									$conexion = Conexion::obtener_conexion();			
									$producto_boundary = new Producto_Boundary($descripcion, $marca, $modelo, $lote, $procedencia, $vencimiento, $observaciones);
									$producto_boundary->registrar($conexion);
									echo	'<script type="text/javascript">
												window.location.href="productos.php";
												alert("Nuevo producto registrado con éxito.");
											</script>';
									Conexion::cerrar_conexion();
								}
							}
						}
					}
				}
				?>
			</div>

			<!-- modal registro de marcas -->
			<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
                    <div class="modal-content div-registro-marca">
                        <form method="POST" name="form-marca">
                            <label class="font-24px label-title">Registro de marca</label>
                            <p class="font-14px p-campo-obligatorio">* Campo obligatorio</p>

                            <!-- input marca -->
                            <label class="font-18px label-marca">Nombre<span id="spanMarca" class=""> * </span></label>
                            <input 	type="text" name="nombre_marca" id="input-marca" class="form-control width-100" onfocusout="spanNombreMarcaOut()" onfocusin="spanNombreMarcaIn()" oninput="validarNombre()">

                            <!-- inputs submit -->
                            <button type="button" id="button-cancelar-marca" class="btn" onclick="verificar()">Cancelar</button>
                            <input type="submit" id="input-registrar-marca" class="btn" name="registrar-marca" value="Registrar">
                            <?php if ((isset($_POST['registrar-marca'])) && (($_POST['nombre_marca'] != ""))) {
                                $nombre = $_POST['nombre_marca'];
                                
								Conexion::abrir_conexion();
								$conexion = Conexion::obtener_conexion();
								$querySql = "SELECT
												nombre
											FROM
												marca
											WHERE
												UPPER(marca.nombre) = UPPER('$nombre')";
								$sentencia = $conexion->prepare($querySql);
								$sentencia->execute();
								$resultado = $sentencia->fetchAll();
								foreach ($resultado as $valor){
									if ($valor[0] = "") {
										$var = null;
									} else {
										$var = true;
									}
								}
								if (is_null($var)) {
									$querySql = "   INSERT INTO
                                                    marca(nombre)
                                                VALUE
                                                    ('$nombre');";
                                
									$sentencia = $conexion->prepare($querySql);
									$sentencia->execute();

									$querySql = "	SELECT
														id
													FROM
														marca
													WHERE
														marca.nombre = '$nombre'";
									$sentencia = $conexion->prepare($querySql);
									$sentencia->execute();
									$resultado = $sentencia->fetchAll();
									foreach ($resultado as $valor){
										$id_marca = $valor[0];
									}

									echo 	'<script type="text/javascript">
												var sel = document.getElementById("marca");
												var opt = document.createElement("option");
												opt.value = "',$id_marca,'";
												opt.text = "',$nombre,'";
												sel.add(opt, null);
											</script>';

									echo	'<script type="text/javascript">
												alert("Nueva marca registrada con éxito.");
											</script>';
								} else {
									echo	'<script type="text/javascript">
												alert("Error al registrar.\nMarca ya registrada.");
											</script>';
								}
								Conexion::cerrar_conexion();
                            } ?>
                        </form>
                    </div>
                </div>
            </div>

			<!-- modal registro de procedencias -->
			<div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
                    <div class="modal-content div-registro-marca">
                        <form method="POST" name="form-procedencia">
                            <label class="font-24px label-title">Registro de procedencia</label>
                            <p class="font-14px p-campo-obligatorio">* Campo obligatorio</p>

                            <!-- input marca -->
                            <label class="font-18px label-marca">Nombre<span id="spanProcedencia" class=""> * </span></label>
                            <input 	type="text" name="nombre-procedencia" id="input-procedencia" class="form-control width-100" onfocusout="spanNombreProcedenciaOut()" onfocusin="spanNombreProcedenciaIn()" oninput="validarNombreProcedencia()">

                            <!-- inputs submit -->
                            <button type="button" id="button-cancelar-procedencia" class="btn" onclick="verificarProcedencia()">Cancelar</button>
                            <input type="submit" id="input-registrar-procedencia" class="btn" name="registrar-procedencia" value="Registrar">
                            <?php if ((isset($_POST['registrar-procedencia'])) && (($_POST['nombre-procedencia'] != ""))) {
                                $nombre = $_POST['nombre-procedencia'];
                                
								Conexion::abrir_conexion();
								$conexion = Conexion::obtener_conexion();
								$querySql = "SELECT
												nombre
											FROM
												procedencia
											WHERE
												UPPER(procedencia.nombre) = UPPER('$nombre')";
								$sentencia = $conexion->prepare($querySql);
								$sentencia->execute();
								$resultado = $sentencia->fetchAll();
								foreach ($resultado as $valor){
									if ($valor[0] = "") {
										$var = null;
									} else {
										$var = true;
									}
								}
								if (is_null($var)) {
									$querySql = "   INSERT INTO
                                                    procedencia(nombre)
                                                VALUE
                                                    ('$nombre');";
									$sentencia = $conexion->prepare($querySql);
									$sentencia->execute();

									$querySql = "	SELECT
														id
													FROM
														procedencia
													WHERE
														procedencia.nombre = '$nombre'";
									$sentencia = $conexion->prepare($querySql);
									$sentencia->execute();
									$resultado = $sentencia->fetchAll();
									foreach ($resultado as $valor){
										$id_procedencia = $valor[0];
									}

									echo 	'<script type="text/javascript">
												var sel = document.getElementById("procedencia");
												var opt = document.createElement("option");
												opt.value = "',$id_procedencia,'";
												opt.text = "',$nombre,'";
												sel.add(opt, null);
											</script>';

									echo	'<script type="text/javascript">
												alert("Nueva procedencia registrada con éxito.");
											</script>';
								} else {
									echo	'<script type="text/javascript">
												alert("Error al registrar.\nProcedencia ya registrada.");
											</script>';
								}
								Conexion::cerrar_conexion();
                            } ?>
                        </form>
                    </div>
                </div>
            </div>
		</div>

		<!-- interacciones con javascript -->
		<script src="../../js/interaction-productos.js"></script>
		<script>
			document.getElementById("input-registrar-marca").disabled = true;
			function verificar(){
				if (document.getElementById("input-marca").value == "") {
					document.getElementById("input-marca").className = document.getElementById("input-marca").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
					document.getElementById("input-registrar-marca").disabled = true;
					$('#staticBackdrop2').modal('hide');
				} else {
					var respuesta = confirm("¿Desea salir?\nSi sale se perderán los cambios realizados.");
					if(respuesta == true) {
						document.getElementById("input-marca").value = "";
						document.getElementById("input-marca").className = document.getElementById("input-marca").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
						document.getElementById("input-registrar-marca").disabled = true;
						$('#staticBackdrop2').modal('hide');
					}
				}
			}
			function listaProductos(){
                window.location.href="productos.php";
            }
			/* input nombre marca */
			function spanNombreMarcaIn(){
				document.getElementById("input-marca").className =document.getElementById("input-marca").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
			}
			function spanNombreMarcaOut(){
				document.getElementById("input-marca").value = document.getElementById("input-marca").value.trim();
				if (document.getElementById("input-marca").value == "") {document.getElementById("input-marca").className += " input-red";}
			}
			function validarNombre(){
				if (document.getElementById("input-marca").value != "") {
					document.getElementById("input-registrar-marca").disabled = false;
				} else {
					document.getElementById("input-registrar-marca").disabled = true;
				}
			}

			/* Procedencia -------------------- */
			function verificarProcedencia(){
				if (document.getElementById("input-procedencia").value == "") {
					document.getElementById("input-procedencia").className =document.getElementById("input-procedencia").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
					document.getElementById("input-registrar-procedencia").disabled = true;
					$('#staticBackdrop3').modal('hide');
				} else {
					var respuesta = confirm("¿Desea salir?\nSi sale se perderán los cambios realizados.");
					if(respuesta == true) {
						document.getElementById("input-procedencia").value = "";
						document.getElementById("input-procedencia").className =document.getElementById("input-procedencia").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
						document.getElementById("input-registrar-procedencia").disabled = true;
						$('#staticBackdrop3').modal('hide');
					}
				}
			}

			document.getElementById("input-registrar-procedencia").disabled = true;
			function spanNombreProcedenciaIn(){
				document.getElementById("input-procedencia").className =document.getElementById("input-procedencia").className.replace( /(?:^|\s)input-red(?!\S)/g , '' );
			}
			function spanNombreProcedenciaOut(){
				document.getElementById("input-procedencia").value = document.getElementById("input-procedencia").value.trim();
				if (document.getElementById("input-procedencia").value == "") {document.getElementById("input-procedencia").className += " input-red";}
			}
			function validarNombreProcedencia(){
				if (document.getElementById("input-procedencia").value != "") {
					document.getElementById("input-registrar-procedencia").disabled = false;
				} else {
					document.getElementById("input-registrar-procedencia").disabled = true;
				}
			}

			function validarCampo(){
				if ((document.getElementById("input-descripcion").value != "") && (document.getElementById("marca").value != "") && (document.getElementById("modelo").value != "") && (document.getElementById("procedencia").value != "")){
					document.getElementById("input-registrar").disabled = false;
				} else {
					document.getElementById("input-registrar").disabled = true;
				}
			}

			document.getElementById("a-productos").href = "productos.php";

		</script>
		<!-- Javascript de boostrap -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	</body>
</html>