<?php
	class Producto_Control{

		public function __construct(){}

		public function registrar($conexion, $descripcion, $marca, $modelo, $lote, $procedencia, $fecha_vencimiento, $observacion){
			$querySql = "	INSERT INTO
								modelo (id_marca, nombre)
							VALUES
								('$marca', '$modelo')";
			$sentencia = $conexion->prepare($querySql);
			$sentencia->execute();

			$querySql = "	SELECT
								id
							FROM
								modelo
							WHERE
								modelo.nombre = '$modelo'
							AND
								modelo.id_marca = '$marca'";
			$sentencia = $conexion->prepare($querySql);
			$sentencia->execute();
			$resultado = $sentencia->fetchAll();
			$id_modelo = 0;
			foreach ($resultado as $valor){
				$id_modelo = $valor[0];
			}
			$querySql = "	INSERT INTO
								producto (descripcion, lote, vencimiento, procedencia, observacion, modelo)
							VALUES
								('$descripcion', '$lote', '$fecha_vencimiento', '$procedencia', '$observacion', '$id_modelo')";
			$sentencia = $conexion->prepare($querySql);
			$sentencia->execute();
		}

	}
?>
