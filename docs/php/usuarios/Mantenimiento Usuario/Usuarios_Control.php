<?php

declare(strict_types=1);

namespace Mantenimiento Usuario;

class Usuarios_Control
{





	public function __construct()
	{
		// ...
	}

	public function listar_usuarios(): array
	{
		// TODO implement here
		return [];
	}

	public function baja(Integer $id): boolean
	{
		// TODO implement here
		return false;
	}

	public function set_contraseña(Integer $id, String $contraseña): void
	{
		// TODO implement here
		return null;
	}

	public function set_perfil(Integer $id_usuario, Integer $id_perfil): boolean
	{
		// TODO implement here
		return false;
	}

}
