<?php

declare(strict_types=1);

namespace Crear Usuario;

class Lista_Usuarios
{

	private array $usuarios;







	public function __construct()
	{
		// ...
	}

	public function buscar_doc(Integer $documento): boolean
	{
		// TODO implement here
		return false;
	}

	public function agregar([object Object] $usuario): void
	{
		// TODO implement here
		return null;
	}

	public function verificar(Integer $documento, String $contraseña): boolean
	{
		// TODO implement here
		return false;
	}

	public function get_usuarios(): array
	{
		// TODO implement here
		return [];
	}

	public function baja(Integer $id): boolean
	{
		// TODO implement here
		return false;
	}

	public function buscar_id(Integer $id): boolean
	{
		// TODO implement here
		return false;
	}

	public function set_contraseña(Integer $id, String $contraseña): void
	{
		// TODO implement here
		return null;
	}

}
