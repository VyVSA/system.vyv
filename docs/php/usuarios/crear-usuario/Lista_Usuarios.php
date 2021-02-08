<?php

class Lista_Usuarios{

	private $usuarios;

	public function __construct(){
	}

	public function buscar_doc($documento){
		return false;
	}

	public function agregar($usuario){
		return null;
	}

	public function verificar($documento, String $contraseña){
		return false;
	}

	public function get_usuarios(){
		return false;
	}

	public function baja($id){
		return false;
	}

	public function buscar_id($id){
		return false;
	}

	public function set_contraseña($id, String $contraseña){
		return null;
	}

}