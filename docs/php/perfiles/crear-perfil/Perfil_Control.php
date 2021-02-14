<?php
	class Perfil_Control{
		public function __construct(){}
		public function registrar($conexion, $nombre, $funciones){
			/* registro del nuevo perfil */
			try {
				$querySql="	INSERT INTO
								perfil(
									nombre
								)
							VALUES(
								'$nombre'
							)";

				$sentencia = $conexion->prepare($querySql);
				$sentencia->execute();
			} catch (Exception $e) {
				print "ERROR: ".$e->getMessage();
			}
			/* query para obtener el id del perfil recién registrado */
			try {
				$querySql="	SELECT
								id
							FROM
								perfil
							WHERE
								nombre='$nombre'";
				$sentencia = $conexion->prepare($querySql);
				$sentencia->execute();
				$resultado = $sentencia->fetchAll();
				$id_perfil;
				foreach ($resultado as $perfil) {
					$id_perfil = $perfil['id'];
				}
			} catch (Exception $e) {
				print "ERROR: ".$e->getMessage();
			}
			/* registro de las funciones del perfil */
			try {
				for ($i=0; $i<count($funciones); $i++) {
					$querySql=" INSERT INTO
									perfil_funcion(
										id_perfil,
										id_funcion
									)
								VALUES(
									'$id_perfil',
									'$funciones[$i]'
								)";
					$sentencia = $conexion->prepare($querySql);
					$sentencia->execute();
				}
			} catch (Exception $e) {
				print "ERROR: ".$e->getMessage();
			}
			return false;
		}
	}
?>