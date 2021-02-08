<?php

declare(strict_types=1);

namespace Crear Usuario;

class Usuario_Entity
{

	private Integer $id;

	private Integer $documento;

	private String $nombres;

	private String $apellidos;

	private String $celular;

	private String $email;

	private String $direccion;

	private String $contraseña;

	private Integer $estado;

	private Perfil_Entity $perfil;







	public function __construct()
	{
		// ...
	}

	public function Usuario_Entity(Integer $id, Integer $documento, String $nombres, String $apellidos, String $celular, String $email, String $direccion, String $contraseña, Integer $estado, [object Object] $perfil)
	{
		// TODO implement here
	}

	public function get_id(): Integer
	{
		// TODO implement here
		return null;
	}

	public function get_documento(): Integer
	{
		// TODO implement here
		return null;
	}

	public function get_contraseña(): String
	{
		// TODO implement here
		return null;
	}

	public function get_estado(): Integer
	{
		// TODO implement here
		return null;
	}

	public function get_perfil(): [object Object]
	{
		// TODO implement here
		return null;
	}

	public function set_contraseña(String $contraseña): void
	{
		// TODO implement here
		return null;
	}

	public function set_perfil([object Object] $perfil): void
	{
		// TODO implement here
		return null;
	}

	public function set_documento(Integer $documento): void
	{
		// TODO implement here
		return null;
	}

	public function set_nombres(String $nombres): void
	{
		// TODO implement here
		return null;
	}

	public function set_apellidos(String $apellidos): void
	{
		// TODO implement here
		return null;
	}

	public function set_celular(String $celular): void
	{
		// TODO implement here
		return null;
	}

	public function set_email(String $email): void
	{
		// TODO implement here
		return null;
	}

	public function set_direccion(String $direccion): void
	{
		// TODO implement here
		return null;
	}

	public function set_estado(Integer $estado): void
	{
		// TODO implement here
		return null;
	}

}
