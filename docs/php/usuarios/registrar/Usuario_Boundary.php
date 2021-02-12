<?php

	include 'Usuario_Control.php';

	class Usuario_Boundary{

		private $conexion; 	private $documento; private $nombres; 	private $apellidos;
		private $celular; 	private $email; 	private $direccion; private $perfil;

		public function __construct($conexion, $documento, $nombres, $apellidos, $celular, $email, $direccion, $perfil){
			$this->conexion=$conexion;
			$this->documento=$documento;
			$this->nombres=$nombres;
			$this->apellidos=$apellidos;
			$this->celular=$celular;
			$this->email=$email;
			$this->direccion=$direccion;
			$this->perfil=$perfil;
		}

		public function registrar(){
			$usuarioControl = new Usuario_Control();
			$existe = $usuarioControl->verificar($this->conexion, $this->documento);
			if (!$existe) {
				$usuarioControl->registrar($this->conexion, $this->documento, $this->nombres, $this->apellidos, $this->celular, $this->email, $this->direccion, $this->perfil);
				return true;
			} else {
				return false;
			}
		}

		public function actualizar($id, $documento, $nombres, $apellidos, $celular, $email, $direccion){
			return null;
		}

	}

?>