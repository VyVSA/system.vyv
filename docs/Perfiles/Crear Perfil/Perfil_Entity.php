<?php

declare(strict_types=1);

namespace Crear Perfil;

class Perfil_Entity
{

	private Integer $id;

	private String $nombre;

	private array $funciones;

	private Integer $tipo;





	public function __construct()
	{
		// ...
	}

	public function Perfil_Entity(Integer $id, String $nombre, Integer $funciones, Integer $tipo)
	{
		// TODO implement here
	}

	public function actualizar(Integer $funciones): void
	{
		// TODO implement here
		return null;
	}

	public function get_tipo(): Integer
	{
		// TODO implement here
		return null;
	}

}
