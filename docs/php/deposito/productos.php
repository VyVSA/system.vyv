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
		<link rel="stylesheet" type="text/css" href="../../css/productos.css">
		<link rel="stylesheet" type="text/css" href="../../css/menu-head.css">
        <!-- estilos de texto -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap">
		<!-- estilos de bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<title>V&V S.A. - Listado de productos</title>
	</head>
	<body>
		<!-- inclusión del menú en la cabacera de la página -->
		<?php include '../../menu-head.php' ?>
		<div class="div-content">
			<div class="div-add-product">
				<button class="button-modal button-add-product" type="button" onclick="registrarProductos()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg>
					<p class="p-add-product font-18px">Agregar nuevo producto</p>
				</button>
			</div>
            <!-- listado de productos -->
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
					foreach ($productos as $producto) { ?>
						<tr class="font-size-body">
							<td class="td-id"><?php echo $producto[0] ?></td>
							<td class="td-descripcion"><?php echo $producto[1] ?></td>
							<td class="td-modelo"><?php echo $producto[2] ?></td>
							<td class="td-marca"><?php echo $producto[3] ?></td>
							<td class="td-lote"><?php echo $producto[4] ?></td>
							<td class="td-procedencia"><?php echo $producto[5] ?></td>
							<td class="td-stock"><?php echo $producto[6] ?></td>
							<td class="td-precio-compra"><?php echo $producto[7] ?></td>
							<td class="td-precio-venta"><?php echo $producto[8] ?></td>
							<td class="td-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                </svg>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>

            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
                    <div class="modal-content div-registro-marca">
                        <form method="POST" name="form-marca">
                            <label class="font-24px label-title">Registro de marca</label>
                            <p class="font-14px p-campo-obligatorio">* Campo obligatorio</p>

                            <!-- input marca -->
                            <label class="font-18px label-marca">Nombre<span id="spanMarca" class=""> * </span></label>
                            <input 	type="text" name="nombre_marca" id="input-marca" class="form-control width-100">

                            <!-- inputs submit -->
                            <button type="button" id="button-cancelar-marca" class="btn" onclick="" <?php echo 'data-bs-dismiss="modal"' ?>>Cancelar</button>
                            <input type="submit" id="input-registrar-marca" class="btn" name="registrar-marca" value="Registrar">
                            <?php
                                if ((isset($_POST['registrar-marca'])) && (($_POST['nombre_marca'] != ""))) {
                                    echo    '<script type="text/javascript">
                                                alert("Tarea Guardada");
                                            </script>';
                                    $nombre = $_POST['nombre_marca'];
                                    $querySql = "   INSERT INTO
                                                        marca(nombre)
                                                    VALUE
                                                        ('$nombre');";
                                    Conexion::abrir_conexion();
									$conexion = Conexion::obtener_conexion();
									$sentencia = $conexion->prepare($querySql);
									$sentencia->execute();
									Conexion::cerrar_conexion();
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
		</div>

		<!-- interacciones con javascript -->
		<script src="../../js/interaction-productos.js"></script>
        <script>
            function registrarProductos(){
                window.location.href="registro-productos.php";
            }
        </script>

		<!-- Javascript de boostrap -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	</body>
</html>