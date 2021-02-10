<?php

class Usuarios_Control
{


	public function __construct()
	{
		// ...
	}

	public function listar_usuarios(){
		return [];
	}

	public function baja($id){
		return false;
	}

	public function set_contraseña($id, String $contraseña){
		return null;
	}

	public function set_perfil($id_usuario, $id_perfil){
		return false;
	}

}
