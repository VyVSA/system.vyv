<?php

	include_once '../conexion.inc.php';

	class Lista_Usuarios{

		private $usuarios;

		public function __construct(){}

		public function buscar_doc($documento){}

		public function agregar($usuario){}

		public function verificar($documento, $contraseña){}

		public function get_usuarios(){
			$querySql = "SELECT
							usuario.id, documento, usuario.nombre, apellido, celular, email, direccion, estado, perfil.nombre
						FROM
							usuario
						INNER JOIN
							perfil
						ON
							usuario.perfil = perfil.id;";

			Conexion::abrir_conexion();

			$conexion = Conexion::obtener_conexion();
			$sentencia = $conexion->prepare($querySql);
			$sentencia->execute();
			$usuarios = $sentencia->fetchAll();

			Conexion::cerrar_conexion();

			if (isset($usuarios)) {
				return $usuarios;
			}

			return null;
		}

		public function baja($id){}

		public function buscar_id($id){}

		public function set_contraseña($id, $contraseña){}

	}
?>