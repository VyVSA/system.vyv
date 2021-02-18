<?php
	include_once '../conexion.inc.php';
	class Productos_Control{

		public function __construct(){}

		public function listar_productos(){
			$querySql="	SELECT
							producto.id,
							producto.descripcion,
							marca.nombre,
							modelo.nombre,
							producto.lote,
							procedencia.nombre,
							producto.stock,
							producto.precio_promedio,
							producto.precio_venta
						FROM
							producto
						INNER JOIN
							modelo
						ON
							producto.modelo = modelo.id
						INNER JOIN
							marca
						ON
							modelo.id_marca = marca.id
						INNER JOIN
							procedencia
						ON
							producto.procedencia = procedencia.id";
			Conexion::abrir_conexion();

			$conexion = Conexion::obtener_conexion();
			$sentencia = $conexion->prepare($querySql);
			$sentencia->execute();
			$productos = $sentencia->fetchAll();

			Conexion::cerrar_conexion();

			if (isset($productos)) {
				return $productos;
			}

			return null;
		}

		public function actualizar(){}

	}
?>
