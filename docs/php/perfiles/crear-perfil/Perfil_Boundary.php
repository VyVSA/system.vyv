<?php

	include_once 'Perfil_Control.php';

	class Perfil_Boundary{

		private $conexion;
		private $nombre;
		private $funciones = array(); /* array */

		public function __construct($conexion, $nombre, $funciones){
			$this->conexion = $conexion;
			$this->nombre = $nombre;
			$this->funciones = $funciones;
		}

		public function registrar(){
			$perfilControl = new Perfil_Control();
			$perfilControl->registrar($this->conexion, $this->nombre, $this->funciones);
		}

	}

?>