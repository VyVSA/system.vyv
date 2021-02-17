<?php
	include_once 'Producto_Control.php';
	class Producto_Boundary{

		private $descripcion;
		private $marca;
		private $modelo;
		private $lote;
		private $procedencia;
		private $fecha_vencimiento;
		private $observacion;

		public function __construct($descripcion, $marca, $modelo, $lote, $procedencia, $fecha_vencimiento, $observacion){
			$this->descripcion = $descripcion;
			$this->marca = $marca;
			$this->modelo = $modelo;
			$this->lote = $lote;
			$this->procedencia = $procedencia;
			$this->fecha_vencimiento = $fecha_vencimiento;
			$this->observacion = $observacion;
		}

		public function registrar(){
			$producto_control = new Producto_Control(	$this->descripcion,
														$this->marca,
														$this->modelo,
														$this->lote,
														$this->procedencia,
														$this->fecha_vencimiento,
														$this->observacion);
		}

	}
?>