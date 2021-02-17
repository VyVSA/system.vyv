<?php
include_once 'Productos_Control.php';
	class Productos_Boundary{

		public function __construct(){}

		public function listar_productos(){
			$productos_control = new Productos_Control();
			return $productos_control->listar_productos();
		}

	}
?>