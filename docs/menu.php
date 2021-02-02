<?php
	include_once 'php/class.usuario.php';
	include_once 'php/class.usuario.control.php';
	include_once 'php/conexion.inc.php';
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="css/estilo.css">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	</head>

	<body>
		<div class="menu">
            <img class="logo" src="image/vyv_logo_3.png" alt="logo vyv s.a.">

            <lu class="items">
                <li class="item-menu">
                    <h2 class="active">Pefiles</h2>
                </li>

                <li class="item-menu">
                    <h2>Usuarios</h2>
                </li>

                <li class="item-menu">
                    <h2>Productos</h2>
                </li>

                <li class="item-menu">
                    <h2>Compras</h2>
                </li>

                <li class="item-menu">
                    <h2>Ventas</h2>
				</li>
			</lu>
				<button class="btn-cuenta">
					<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
						<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
						<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
					</svg>
					Cuenta
                </button>
			
        </div>

		<!-- Javascript de boostrap -->
 		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	</body>
</html>