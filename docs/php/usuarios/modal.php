<?php
	include_once '../conexion.inc.php';
	include_once 'registrar/Usuario_Boundary.php';
	include_once 'mantener/Usuarios_Boundary.php';
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- estilos css personalizados -->
		<link rel="stylesheet" type="text/css" href="../../css/registro-usuarios.css">
		<link rel="stylesheet" type="text/css" href="../../css/menu.css">

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

			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
				Launch static backdrop modal
			</button>
			<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Understood</button>
					</div>
					</div>
				</div>
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