<?php 
	
	/*
		autor: Oscar Gómez
		fecha de creación: 12/10/2020
		modificado por: Oscar Gómez
		fecha de modificación: 15/10/2020
	*/

	class Usuario_Control{

		function __construct(){
			
		}

		public function validad(){

		}
		
		public function registrar($conexion, $usuario){
			try {
				$documento = $usuario -> get_documento();
				$nombre = $usuario -> get_nombre();
				$apellido = $usuario -> get_apellido();
				$celular = $usuario -> get_celular();
				$correo_electronico = $usuario -> get_correo_electronico();
				$direccion = $usuario -> get_direccion();
				$contrasenha = $usuario -> get_contrasenha();

				$sql = "	INSERT INTO 
								usuarios(
									documento,
									nombre,
									apellido,
									celular,
									correo_electronico,
									direccion,
									contrasenha
								)
							VALUES(	'$documento',
									'$nombre',
									'$apellido',
									'$celular',
									'$correo_electronico',
									'$direccion',
									'$contrasenha')";

				$sentencia = $conexion -> prepare($sql);
				$sentencia -> execute();
			} catch (Exception $e) {
				print "ERROR: ".$e -> getMessage();
			}
			
		}

		public function buscar(){

		}

	}

?>