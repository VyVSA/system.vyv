<?php

	include_once 'registrar/Lista_Usuarios.php';
	
	class Usuarios_Control{
		public function __construct(){}

		public function listar_usuarios(){
			$lista_usuarios = new Lista_Usuarios();
			$usuarios = $lista_usuarios->get_usuarios();
			return $usuarios;
		}

		public function baja($id){}

		public function set_contraseña($id, $contraseña){}

		public function set_perfil($id_usuario, $id_perfil){}
	}
?>