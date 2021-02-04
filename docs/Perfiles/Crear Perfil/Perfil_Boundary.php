<?php

	class Perfil_Boundary{

		private $nombre;
		private $funciones = array(); /* array */

		public function __construct($nombre, $funciones){
			$this->nombre = $nombre;
			$this->funciones = $funciones;
		}

		public function registrar($nombre, $funciones){
			
		}

	}

?>