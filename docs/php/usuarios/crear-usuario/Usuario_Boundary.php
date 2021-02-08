<?php

	include 'Usuario_Control.php';

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

		public function registrar(){
			$usuarioControl = new Usuario_Control();
			$usuarioControl->registrar($this->documento, $this->nombres, $this->apellidos, $this->celular, $this->email, $this->direccion, $this->perfil);
		}

		public function actualizar($id, $documento, $nombres, $apellidos, $celular, $email, $direccion){
			return null;
		}

	}

?>