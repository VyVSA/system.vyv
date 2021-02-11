<?php

	include 'Usuarios_Control.php';

	class Usuarios_Boundary{
		
		public function __construct(){}

		public function listar_usuarios(){
			$usuarios_control = new Usuarios_Control();
			$usuarios = $usuarios_control->listar_usuarios();
			return $usuarios;
		}

		public function baja($id){}

		public function set_contraseña($id, $contraseña){}

		public function set_perfil($id_usuario, $id_perfil){}
	}
?>