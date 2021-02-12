<?php
	class Usuario_Control{
		public function __construct(){}

		public function verificar($conexion, $documento){
			try {
				$querySql="	SELECT
								documento
							FROM
								usuario
							WHERE
								usuario.documento='$documento'";
				$sentencia = $conexion->prepare($querySql);
				$sentencia->execute();
				$resultado = $sentencia->fetchAll();

				$doc_usuario;
				foreach ($resultado as $usuario) {
					$doc_usuario = $usuario['documento'];
				}
			} catch (Exception $e) {
				print "ERROR: ".$e->getMessage();
			}

			if ($doc_usuario == '' || is_null($doc_usuario)) {
				return false;
			} else {
				return true;
			}
		}

		public function registrar($conexion, $documento, $nombres, $apellidos, $celular, $email, $direccion, $perfil){
			try {
				$querySql="	INSERT INTO
								usuario(
									documento, nombre, apellido, celular, email, direccion, perfil
								)
							VALUES(
								'$documento', '$nombres', '$apellidos', '$celular', '$email', '$direccion', '$perfil'
							)";
				$sentencia = $conexion->prepare($querySql);
				$sentencia->execute();
			} catch (Exception $e) {
				print "ERROR: ".$e->getMessage();
			}
		}

		public function actualizar($id, $datos){}
	}
?>