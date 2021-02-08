<?php

	class Usuario_Boundary{

		private $documento;
		private $nombres;
		private $apellidos;
		private $celular;
		private $email;
		private $direccion;
		private $perfil;

		public function __construct($documento, $nombres, $apellidos, $celular, $email, $direccion, $perfil){
			$this->documento = $documento;
			$this->nombres = $nombres;
			$this->apellidos = $apellidos;
			$this->celular = $celular;
			$this->email = $email;
			$this->direccion = $direccion;
			$this->perfil = $perfil;
		}

		public function registrar($documento, $nombres, $apellidos, $celular, $email, $direccion, $perfil){
			return null;
		}

		public function actualizar($id, $documento, $nombres, $apellidos, $celular, $email, $direccion){
			return null;
		}

	}

?>