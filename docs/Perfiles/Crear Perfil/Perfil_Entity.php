<?php

	class Perfil_Entity{

		private $id;
		private $nombre;
		private $funciones = array();

		public function __construct($id, $nombre, $funciones){

		}

		public function actualizar($funciones){
			return null;
		}

		public function getFunciones(){
			return $funciones;
		}

		public function getId(){
			return $id;
		}

	}

?>
