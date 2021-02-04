<?php

	class Lista_Perfiles{

		private $perfiles = array();

		public function __construct(){
			
		}

		public function verificar($funciones): boolean{
			return false;
		}

		public function getPerfiles(): array{
			return $perfiles;
		}

		public function agregar($perfil){
			return null;
		}

		public function eliminar($id): boolean{
			return false;
		}

		public function buscar( $id){
			return null;
		}

	}
