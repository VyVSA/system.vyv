<?php

	class Usuario_Control{

		public function __construct(){}

		public function verificar($documento){
			return false;
		}

		public function registrar($conexion, $documento, $nombres, $apellidos, $celular, $email, $direccion, $perfil){
			
			/* registro del nuevo perfil */
			try {
				$querySql="	INSERT INTO
								usuario(
									documento,
									nombre,
									apellido,
									celular,
									email,
									direccion,
									perfil
								)
							VALUES(
								'$documento',
								'$nombres',
								'$apellidos',
								'$celular',
								'$email',
								'$direccion',
								'$perfil'
							)";
				$sentencia = $conexion->prepare($querySql);
				$sentencia->execute();
			} catch (Exception $e) {
				print "ERROR: ".$e->getMessage();
			}

			return null;
		}

		public function actualizar($id, $datos){
			return false;
		}

	}

?>