<?php

declare(strict_types=1);

namespace Registrar Proveedor;

class Proveedor_Boundary
{

	private Integer $id;

	private String $ruc;

	private String $razon_social;

	private array $direcciones;

	private array $telefonos;


	public function __construct()
	{
		// ...
	}

	public function registrar(Integer $id, String $ruc, String $razon_social, String $direcciones, String $telefonos): void
	{
		// TODO implement here
		return null;
	}

}
