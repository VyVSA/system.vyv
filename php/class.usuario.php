<?php

	/*
		autor: Oscar Gómez
		fecha de creación: 12/10/2020
		modificado por: Oscar Gómez
		fecha de modificación: 15/10/2020
	*/

	class Usuario{

		private $id;
		private $documento;
		private $nombre;
		private $apellido;
		private $celular;
		private $correo_electronico;
		private $direccion;
		private $estado;
		private $perfil;

		function __construct(){
        $parametros = func_get_args();
        $numero_parametros = func_num_args();
        $funcion_constructor = '__construct'.$numero_parametros;

        if (method_exists($this, $funcion_constructor)) {
            call_user_func_array(array($this, $funcion_constructor), $parametros);
        }
    }

		function __construct10
		(
			$id, $documento, $nombre, $apellido, $celular, $correo, $direccion, $contrasenha, $estado, $perfil
		)
		{
			$this -> id = $id;
			$this -> documento = $documento;
			$this -> nombre = $nombre;
			$this -> apellido = $apellido;
			$this -> celular = $celular;
			$this -> correo_electronico = $correo;
			$this -> direccion = $direccion;
			$this -> contrasenha = $contrasenha;
			$this -> estado = $estado;
			$this -> perfil = $perfil;
		}

		function __construct7
		(
			$documento, $nombre, $apellido, $celular, $correo, $direccion, $contrasenha
		)
		{
			$this -> documento = $documento;
			$this -> nombre = $nombre;
			$this -> apellido = $apellido;
			$this -> celular = $celular;
			$this -> correo_electronico = $correo;
			$this -> direccion = $direccion;
			$this -> contrasenha = $contrasenha;
		}

		/* getters */
		public function get_id(){
			return $this -> id;
		}
		public function get_documento(){
			return $this -> documento;
		}
		public function get_nombre(){
			return $this -> nombre;
		}
		public function get_apellido(){
			return $this -> apellido;
		}
		public function get_celular(){
			return $this -> celular;
		}
		public function get_correo_electronico(){
			return $this -> correo_electronico;
		}
		public function get_direccion(){
			return $this -> direccion;
		}
		public function get_contrasenha(){
			return $this -> contrasenha;
		}
		public function get_estado(){
			return $this -> estado;
		}
		public function get_perfil(){
			return $this -> perfil;
		}


		/* setters */
		public function set_id($id){
			$this -> id = $id;
		}
		public function set_documento($documento){
			$this -> documento = $documento;
		}
		public function set_nombre($nombre){
			$this -> nombre = $nombre;
		}
		public function set_apellido($apellido){
			$this -> apellido = $apellido;
		}
		public function set_celular($celular){
			$this -> celular = $celular;
		}
		public function set_correo_electronico($correo){
			$this -> correo = $correo;
		}
		public function set_direccion($direccion){
			$this -> direccion = $direccion;
		}
		public function set_contrasenha($contrasenha){
			$this -> contrasenha = $contrasenha;
		}
		public function set_perfil($perfil){
			$this -> perfil = $perfil;
		}

	}

?>